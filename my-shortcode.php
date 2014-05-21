<?php
/********************************************************************************/
/* jqFloating Clouds */
/********************************************************************************/
function sc_jqfloat_sky( $atts, $content = null ) {
	$content = do_shortcode( $content );
	$ret  = '';
	$ret .= '<div id="jqfloat-sky">';
	$ret .= $content;
	$ret .= '</div>';
	return $ret;
}

add_shortcode( 'jqfloat_sky', 'sc_jqfloat_sky' );


function sc_jqfloat_holder( $atts, $content = null ) {
	$content = do_shortcode( $content );
	$ret  = '';
	$ret .= '<div id="jqfloat-holder" style="padding: 0;">';
	$ret .= $content;
	$ret .= '</div>';
	return $ret;
}

add_shortcode( 'jqfloat_holder', 'sc_jqfloat_holder' );


function sc_jqfloat_clouds( $atts ) {
	$ret  = '';
	for ( $i = 1; $i <= 4; $i++ ) {
		$ret .= '<div id="jqfloat-cloud' . $i . '" class="jqfloat-cloud"></div>';
	}
	$ret .= '<div id="jqfloat-sun"></div>';
	return $ret;
}

add_shortcode( 'jqfloat_clouds', 'sc_jqfloat_clouds' );


/********************************************************************************/
/* Dancing Erika Style */
/********************************************************************************/
function sc_erika_style( $atts ) {
	extract( shortcode_atts( array(
			'background'	=>	'',
			'button'		=>	'true',
			'id'			=>	'erika-style',
	), $atts ) );

	$playbutton = '';
	if ( $button == 'true' ) {
		$playbutton = '<a type="button" class="button player-pause" id="player-button" href="#' . $id . '"></a>';
	}
	$datastyle = '';
	if ( $background != '' ) {
		$datastyle = ' style="background:' . $background . ';"';
	}

	$ret  = '';
	$ret .= '<div id="erika-style"' . $datastyle . '>';
		$ret .= '<div id="erika-canvas">';
			$ret .= '<div id="erika-corebody">';
				$ret .= '<div id="erika-waist">';
					$ret .= '<div id="erika-waist_r1"></div>';
					$ret .= '<div id="erika-waist_r2"></div>';
					$ret .= '<div id="erika-waist_l2"></div>';
					$ret .= '<div id="erika-waist_l1"></div>';
					$ret .= '<div id="erika-bust">';
						$ret .= '<div id="erika-bust_r"></div>';
						$ret .= '<div id="erika-bust_l"></div>';
						$ret .= '<div id="erika-sholder_r">';
							$ret .= '<div id="erika-upperarm_r">';
								$ret .= '<div id="erika-lowerarm_r">';
									$ret .= '<div id="erika-lowerarm_r_r"></div>';
									$ret .= '<div id="erika-lowerarm_r_l"></div>';
									$ret .= '<div id="erika-hand_r">';
										$ret .= '<div id="erika-hand_r_l"></div>';
									$ret .= '</div>';
								$ret .= '</div>';
							$ret .= '</div>';
						$ret .= '</div>';
						$ret .= '<div id="erika-scarf_r"></div>';
						$ret .= '<div id="erika-sholder_l">';
							$ret .= '<div id="erika-scarf_l"></div>';
							$ret .= '<div id="erika-upperarm_l">';
								$ret .= '<div id="erika-lowerarm_l">';
									$ret .= '<div id="erika-lowerarm_l_r"></div>';
									$ret .= '<div id="erika-lowerarm_l_l"></div>';
									$ret .= '<div id="erika-hand_l">';
										$ret .= '<div id="erika-hand_l_l"></div>';
									$ret .= '</div>';
								$ret .= '</div>';
							$ret .= '</div>';
						$ret .= '</div>';
						$ret .= '<div id="erika-button_r_upper"></div>';
						$ret .= '<div id="erika-button_l_upper"></div>';
						$ret .= '<div id="erika-ribbon">';
							$ret .= '<div id="erika-ribbon_r_upper">';
								$ret .= '<div id="erika-ribbon_r_upper_1"></div>';
								$ret .= '<div id="erika-ribbon_r_upper_2"></div>';
							$ret .= '</div>';
							$ret .= '<div id="erika-ribbon_r_lower">';
								$ret .= '<div id="erika-ribbon_r_lower_1"></div>';
								$ret .= '<div id="erika-ribbon_r_lower_2"></div>';
							$ret .= '</div>';
							$ret .= '<div id="erika-ribbon_c"></div>';
							$ret .= '<div id="erika-ribbon_l_upper">';
								$ret .= '<div id="erika-ribbon_l_upper_1"></div>';
								$ret .= '<div id="erika-ribbon_l_upper_2"></div>';
							$ret .= '</div>';
							$ret .= '<div id="erika-ribbon_l_lower">';
								$ret .= '<div id="erika-ribbon_l_lower_1"></div>';
								$ret .= '<div id="erika-ribbon_l_lower_2"></div>';
							$ret .= '</div>';
						$ret .= '</div>';
						$ret .= '<div id="erika-neck">';
							$ret .= '<div id="erika-backhair">';
								$ret .= '<div id="erika-backhair_r_0"></div>';
								$ret .= '<div id="erika-backhair_r_1"></div>';
								$ret .= '<div id="erika-backhair_c"></div>';
								$ret .= '<div id="erika-backhair_l_1"></div>';
								$ret .= '<div id="erika-backhair_l_0"></div>';
							$ret .= '</div>';
							$ret .= '<div id="erika-neck_tohead"></div>';
							$ret .= '<div id="erika-neckline_upper"></div>';
							$ret .= '<div id="erika-neckline_lower"></div>';
							$ret .= '<div id="erika-head">';
								$ret .= '<div id="erika-hair">';
									$ret .= '<div id="erika-fronthair">';
										$ret .= '<div id="erika-fronthair_r0"></div>';
										$ret .= '<div id="erika-fronthair_r1"></div>';
										$ret .= '<div id="erika-fronthair_l1"></div>';
										$ret .= '<div id="erika-fronthair_l0"></div>';
									$ret .= '</div>';
								$ret .= '</div>';
								$ret .= '<div id="erika-eye_r">';
									$ret .= '<div id="erika-eye_r_outline">';
										$ret .= '<div id="erika-eye_r_core"></div>';
										$ret .= '<div id="erika-eye_r_upperwhite"></div>';
										$ret .= '<div id="erika-eye_r_lowerwhite"></div>';
									$ret .= '</div>';
									$ret .= '<div id="erika-eye_r_upperline"></div>';
								$ret .= '</div>';
								$ret .= '<div id="erika-eye_l">';
									$ret .= '<div id="erika-eye_l_outline">';
										$ret .= '<div id="erika-eye_l_core"></div>';
										$ret .= '<div id="erika-eye_l_upperwhite"></div>';
										$ret .= '<div id="erika-eye_l_lowerwhite"></div>';
									$ret .= '</div>';
									$ret .= '<div id="erika-eye_l_upperline"></div>';
								$ret .= '</div>';
								$ret .= '<div id="erika-brow_r"></div>';
								$ret .= '<div id="erika-brow_l"></div>';
								$ret .= '<div id="erika-mouth"></div>';
								$ret .= '<div id="erika-sideburns">';
									$ret .= '<div id="erika-sideburns_r">';
										$ret .= '<div id="erika-sideburns_r_0">';
											$ret .= '<div id="erika-sideburns_r_1">';
												$ret .= '<div id="erika-sideburns_r_2">';
													$ret .= '<div id="erika-sideburns_r_3">';
														$ret .= '<div id="erika-sideburns_r_4">';
															$ret .= '<div id="erika-sideburns_r_5">';
																$ret .= '<div id="erika-sideburns_r_6"></div>';
															$ret .= '</div>';
														$ret .= '</div>';
													$ret .= '</div>';
												$ret .= '</div>';
											$ret .= '</div>';
										$ret .= '</div>';
									$ret .= '</div>';
									$ret .= '<div id="erika-sideburns_l">';
										$ret .= '<div id="erika-sideburns_l_0">';
											$ret .= '<div id="erika-sideburns_l_1">';
												$ret .= '<div id="erika-sideburns_l_2">';
													$ret .= '<div id="erika-sideburns_l_3">';
														$ret .= '<div id="erika-sideburns_l_4">';
															$ret .= '<div id="erika-sideburns_l_5">';
																$ret .= '<div id="erika-sideburns_l_6"></div>';
															$ret .= '</div>';
														$ret .= '</div>';
													$ret .= '</div>';
												$ret .= '</div>';
											$ret .= '</div>';
										$ret .= '</div>';
									$ret .= '</div>';
								$ret .= '</div>';
							$ret .= '</div>';
						$ret .= '</div>';
					$ret .= '</div>';
					$ret .= '<div id="erika-button_r_lower"></div>';
					$ret .= '<div id="erika-button_l_lower"></div>';
					$ret .= '<div id="erika-skirt">';
						$ret .= '<div id="erika-skirt_r0"></div>';
						$ret .= '<div id="erika-skirt_r1"></div>';
						$ret .= '<div id="erika-skirt_r2"></div>';
						$ret .= '<div id="erika-skirt_c"></div>';
						$ret .= '<div id="erika-skirt_l2"></div>';
						$ret .= '<div id="erika-skirt_l1"></div>';
						$ret .= '<div id="erika-skirt_l0"></div>';
					$ret .= '</div>';
					$ret .= '<div id="erika-crotch">';
						$ret .= '<div id="erika-thigh_r">';
							$ret .= '<div id="erika-thigh_r_r"></div>';
							$ret .= '<div id="erika-thigh_r_l"></div>';
							$ret .= '<div id="erika-shin_r">';
								$ret .= '<div id="erika-shin_r_r"></div>';
								$ret .= '<div id="erika-foot_r">';
									$ret .= '<div id="erika-foot_r_socks"></div>';
								$ret .= '</div>';
							$ret .= '</div>';
						$ret .= '</div>';
						$ret .= '<div id="erika-thigh_l">';
							$ret .= '<div id="erika-thigh_l_r"></div>';
							$ret .= '<div id="erika-thigh_l_l"></div>';
							$ret .= '<div id="erika-shin_l">';
								$ret .= '<div id="erika-shin_l_l"></div>';
								$ret .= '<div id="erika-foot_l">';
									$ret .= '<div id="erika-foot_l_socks"></div>';
								$ret .= '</div>';
							$ret .= '</div>';
						$ret .= '</div>';
					$ret .= '</div>';
				$ret .= '</div>';
			$ret .= '</div>';
		$ret .= '</div>';
		$ret .= $playbutton;
	$ret .= '</div>';
	return $ret;
}
add_shortcode( 'erika_style', 'sc_erika_style' );
