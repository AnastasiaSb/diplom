<!-- ================================== TOP NAVIGATION ================================== -->
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
<div class="side-menu animate-dropdown outer-bottom-xs">
    <!--<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>-->        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            @foreach($categories as $category)
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-desktop fa-fw"></i>{{ $category->name }}</a>
                 <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <ul class="links list-unstyled"> 
                                @foreach($category->subCategories as $subCategory) 
                                    <li><a href="#">{{ $subCategory->name }}</a></li>
                                @endforeach
                                </ul>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </li><!-- /.yamm-content -->                    
                </ul><!-- /.dropdown-menu -->
            </li><!-- /.menu-item -->
            @endforeach
        </ul><!-- /.nav -->
                      
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
</div>
<!-- ================================== TOP NAVIGATION : END ================================== -->