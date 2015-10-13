<?php

namespace \Modules\Mello_Text

class Text{

	public function render(){

		if( $layout = get_sub_field('layout') ):

			$wrap = get_sub_field('wrap');
			$text = get_sub_field('text');
			$text2 = get_sub_field('text_2');
		
			$output = '<div class="text m-all t-all d-all cf">';

			if ($wrap) $output .= '<div class="wrap cf">'; 
			
				switch ( $layout ) { 
					case '1col':
						
						$output .= '<div class="m-all t-all d-all cf">';
							$output .= $text; 
						$output .='</div>';

						 break; 

					case '2col': 
						
						$output .= '<div class="m-all t-all d-1of2 cf">';
							$output .= $text; 
						$output .= '</div>';

						$output .= '<div class="m-all t-all d-1of2 last-col cf">';
							 $output .= $text2; 
						$output .= '</div>';

						break; 

					case 'improv': 

						$output .= '<div class="copy">';
							$output .= '<div class="m-all t-all d-all cf">';
								 $output .= $text; 
							$output .= '</div>';
						$output .= '</div>';

						break; 
					
					default: 
						
						$output .= $text; 

						break; 
				}	

			if ($wrap) $output .= '</div>'; 

			$output .= '</div>';

		else:

			$output = 'mello_text layout field not present';

		endif; 

		return $ouput;
		
	}

}