<section class="homeBanner light-bg1">
        <div class="container">
            <div class="row align-items-center">
                <div class="contentArea col-lg-7 py-4">
                    <h1>Data Driven Admission <span>Counselling for Medical</span> Aspirants</h1>
                    <p>Get My University bring the power of data science and artificial intelligence to every NEET Aspirant</p>
                    <ul class="searchTab nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#searchUnivercity">Search by University</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#searchCources">Search by State/City</a></li>
					</ul>
                    <div class="searchBar tab-content">
                        <div id="searchUnivercity" class="tab-pane show active">
							<form class="searchForm clearfix" role="form">
                                <input class="form-control" placeholder="Search University" id="searchNames" autocomplete="off"/>
                                <input type="hidden" id="show_name_student" value="" />
                                <button class="btn searchBtn" type="button" id="univercity"><i class="fa fa-search"></i></button>

                                <span class="error_message" id="searchNames_error" style="display:none; color:red;"> Search User name</span>
                                <ul class="search_result" id='search_datas' style="display: none;">

                                </ul>
							</form>
						</div>
						<div id="searchCources" class="tab-pane fade">
							<!-- <form class="searchForm clearfix">
								<select class="form-control selectCources">
									<option value="">Select Courses</option>
                                </select>
								<select class="form-control selectCountry">
									<option value="">Select country</option>
                                </select>
								<button class="btn searchBtn" id="serach"><i class="fa fa-search"></i></button>
							</form> -->
                            <form class="searchForm clearfix" role="form">
                                <input class="form-control" placeholder="Search State/City" id="searchNames4"/>
                                <input type="hidden" id="show_name_student4" value="" />
                                <span class="error_message" id="searchNames_error4" style="display:none; color:red;"> Search User name</span>
                                <ul class="search_result" id='search_datas4' style="display: none;">

                                </ul>
                                <input class="form-control" placeholder="Search Courses" id="searchNames2"/>
                                <input type="hidden" id="show_name_student2" value="" />
                                <span class="error_message" id="searchNames_error2" style="display:none; color:red;"> Search User name</span>
                                <ul class="search_result" id='search_datas2' style="display: none;">

                                </ul>
                                <button class="btn searchBtn" type="button" id="univercity2"><i class="fa fa-search"></i></button>

                            </form>
						</div>
					</div>
                    <div class="info">200+ Colleges, 400+ Courses, 1000+ Reviews </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="imgBox d-none d-lg-block"><img src="images/main-hero2.png" alt="Abroad Journey" width="745" height="636" /></div>
                </div>
            </div>
        </div>
    </section>