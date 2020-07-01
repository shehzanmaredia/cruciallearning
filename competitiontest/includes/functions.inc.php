<?php

class DB_find {
    public const MATCH_OR = 1;
    public const MATCH_AND = 2;
    
    private static function match_single(PDO $pdo, string $tableName, string $columnName, string $value) {     
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE ' . $columnName . '=:0;';
        $prep = $pdo->prepare($sql);
        $prep->bindValue(':0', $value);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_ASSOC);
    }
    private static function match_dictionary(PDO $pdo, string $tableName, array $dictionary, int $type=DB_find::MATCH_OR) {
        if (count($dictionary) == 0) {
            throw new Exception('empty dictionary input');
        }
        $first_iter = TRUE;
        $i = 0;
        $bind = [];
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE ';
        foreach ($dictionary as $columnName=>$value) {
            if (!$first_iter) {
                if ($type==DB_find::MATCH_OR) {
                    $sql .= ' OR ';
                } elseif ($type==DB_find::MATCH_AND) {
                    $sql .= ' AND ';
                } else {
                    throw new Exception('invalid selection type');
                }
            } else {
               $first_iter = FALSE;
            }
            $bind[] = $i++;
            $sql .= $columnName . '=:' . $bind[$i - 1];
            
        }
        $sql .= ';';
        $prep = $pdo->prepare($sql);
        for ($i = 0; $i < count($dictionary); $i++) {
            $keys = array_keys($dictionary);
            $prep->bindValue(':' . $bind[$i], $dictionary[$keys[$i]]);
        }
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function select_all_matching() {
        $args = func_get_args();

        if (!($args[0] instanceof PDO and is_string($args[1]))) {
            throw new Exception("something wrong here " . $args[1]);
        }
        if (is_string($args[2]) or is_int($args[2])) {
            return DB_find::match_single($args[0], $args[1], $args[2], $args[3]);
        } elseif (is_array($args[2])) {
            if (!isset($args[3])) {
                $args[3] = DB_find::MATCH_OR;
            }
            return DB_find::match_dictionary($args[0], $args[1], $args[2], $args[3]);
        }
    }
}

function select_all_matching() {
    $args = func_get_args();
    return DB_find::select_all_matching(...$args);
}