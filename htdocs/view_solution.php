<?php include $_SERVER['DOCUMENT_ROOT'] . '/header_files/header.php'?>
    <div class="content">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-7 col-md-7 problem-display">
        			<?php if (isset($_SESSION['user']) and isset($_SESSION['problem']) and
                        isset($_SESSION['solutions_list']) and isset($_SESSION['correct'])):?>
        				<?php if ($_SESSION['correct']):?>	
        					You got it right!
        				<?php else:?>
        					That was wrong...
        				<?php endif;?>
                		<div class="problem">
                			<?php echo $_SESSION['problem']['problem_text']?> 
                		</div>
                		<?php foreach ($_SESSION['solutions_list'] as $solution):?>
                			<div class="problem">
                				<?php echo $solution['solution_text'];?>
                			</div>
            			<?php endforeach;?>
        
        			<?php else:?>
        				You are accessing this page incorrectly.
        				
        			<?php endif;?>
    			</div>
			</div>
    	</div>
    </div>
<?php include 'footer_files/footer.php'?>