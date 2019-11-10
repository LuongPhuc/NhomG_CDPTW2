
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-25-39" >
    <style 

.type-25-39{
    @color:#fff;
    .content8{
        color: #73879C;
        font-size:13px;
        }

  

        .panel_toolbox>li>a {
            padding: 5px;
            color: #C5C7CB;
            font-size: 14px;
        }
        .block{
            border-left: 3px solid #e8e8e8;
            overflow: visible;
            padding: 10px 15px;
            margin: 0 0 0 105px;
        }




       

        h2.title{
            font-size: 16px;
            margin: 0;
            width: 100%;
        }
        .byline {
            font-size: .9375em;
            line-height: 1.3;
            color: #aab6aa;
            font-style: italic;
            padding: 5px 0;
        }
    }

}
@media(max-width:1200px){
    small{
        display: none;
    }
}

></style>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content8">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel8">
                                    <div class="x_title">
                                        <h2>Daily active users <small>Sessions</small></h2>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element8">
                                        <div class="timeline">
                                            <div class="list-unstyled ">
                                                <div class="block">
                                                    
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a href="">Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a href="">Read&nbsp;More</a>
                                                        </p>
                                                        <hr>
                                                    </div>
                                                    <div class="circle"></div>
                                                </div> 
                                            </div>
                                            <div class="list-unstyled ">
                                                <div class="block">
                                                    
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>1 day ago</span> by <a href="">David Moe</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a href="">Read&nbsp;More</a>
                                                        </p>
                                                        <hr>
                                                    </div>
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                            <div class="list-unstyled unstyle ">
                                                <div class="block">
                                                    
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>1 year ago</span> by <a href="">Jason Statham</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a href="">Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> 
                                </div>
                            </div>                
                        </div>

                    </div>

                </div>
            </div>


</div>
