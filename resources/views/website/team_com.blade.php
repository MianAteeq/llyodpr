	<div class="row">



												@foreach($team as $team_val)
												<div class="wpb_column vc_column_container col-sm-12 col-lg-3 col-md-6  ">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-team-holder mkdf-team-info-below-image">
																<div class="mkdf-team-inner">
																	<div class="mkdf-team-image">
																		<!--<form action="{{url('team_detail',$team_val->id) }}" method="post" id="{{$team_val->id}}">-->
																			<!--@csrf-->
																			<!--<input type="hidden" name="id" value="{{$team_val->id}}">-->
																			<!--<a href="javascript:void(0)" class="employeeLink"><img form_id="{{$team_val->id}}" width="800" height="578" src="{{asset('/images' . '/' .$team_val->image) }}" class="attachment-full size-full" alt="i" loading="lazy" /></a>-->
																			 <a href="{{url('team_detail',str_replace(" ","_",$team_val->title)) }}" class="employeeLink"><img width="800" height="578" src="{{asset('/images' . '/' .$team_val->image) }}" class="attachment-full size-full" alt="i" loading="lazy" /></a> 
																		<!--</form>-->
																	</div>
																	<div class="mkdf-team-info">
																		<h5 class="mkdf-team-name">{{strtoupper($team_val->title)}}</h5>
																		<p class="mkdf-team-text">{{$team_val->designation}}</p>
																		<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">
																			<div class="mkdf-separator" style="width: 100px"></div>
																		</div>
																		<div class="mkdf-team-social-holder">

																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_empty_space" ><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
												@endforeach




											</div>