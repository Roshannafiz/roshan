     <?php
     use App\Models\Admin;
     
     ?>
     <!-- partial:partials/_sidebar.html -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <ul class="nav">
             <li class="nav-item nav-profile">
                 <?php
                 $admin_id = Session::get('id');
                 $adminDetails = Admin::where('id', $admin_id)->get();
                 ?>
                 @foreach ($adminDetails as $admin)
                     <a href="#" class="nav-link">
                         <div class="nav-profile-image">
                             <img src="{{ asset('admin/images/upload-admin/' . $admin->admin_image) }}" alt="profile">
                             <span class="login-status online"></span>
                         </div>
                         <div class="nav-profile-text d-flex flex-column">
                             <span class="font-weight-bold mb-2">
                                 {{ $admin->admin_name }}
                             </span>
                             <span class="text-secondary text-small">Project Manager</span>
                         </div>
                         <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                     </a>
                 @endforeach
             </li>
             <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                 <a class="nav-link" href="{{ url('/dashboard') }}">
                     <span class="menu-title">Dashboard</span>
                     <i class="mdi mdi-home menu-icon"></i>
                 </a>
             </li>




             <!------ For Orders ------>
             <li class="nav-item {{ request()->is('orders') ? 'active' : '' }}">
                 <a class="nav-link" href="{{ url('/orders') }}">
                     <span class="menu-title">Orders</span>
                     <i class="mdi mdi-home menu-icon"></i>
                 </a>
             </li>




             <!------- For Ratings ------>
             <li class="nav-item {{ request()->is('ratings') ? 'active' : '' }}">
                 <a class="nav-link" href="{{ url('/ratings') }}">
                     <span class="menu-title">Ratings / Reviews</span>
                     <i class="mdi mdi-star menu-icon"></i>
                 </a>
             </li>



             <!----------------- For Product ----------->
             <li
                 class="nav-item {{ request()->is('product_create') ? 'active' : '' }} {{ request()->is('products') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#produt" aria-expanded="false"
                     aria-controls="produt">
                     <span class="menu-title">Product</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse{{ request()->is('product_create') ? 'show' : '' }} {{ request()->is('products') ? 'show' : '' }}"
                     id="produt">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('product_create') ? 'active' : '' }}"
                                 href="{{ url('/product_create') }}">Add Product</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('products') ? 'active' : '' }}"
                                 href="{{ url('/products') }}">All Product</a>
                         </li>
                     </ul>
                 </div>
             </li>



             <!----------------- For Section ----------->
             <li
                 class="nav-item {{ request()->is('section_create') ? 'active' : '' }} {{ request()->is('sections') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#section" aria-expanded="false"
                     aria-controls="section">
                     <span class="menu-title">Section</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse{{ request()->is('section_create') ? 'show' : '' }} {{ request()->is('sections') ? 'show' : '' }}"
                     id="section">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('section_create') ? 'active' : '' }}"
                                 href="{{ url('/section_create') }}">Add Section</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('sections') ? 'active' : '' }}"
                                 href="{{ url('/sections') }}">All Section</a>
                         </li>
                     </ul>
                 </div>
             </li>







             <!----------------- For Slider ----------->
             <li
                 class="nav-item {{ request()->is('slider_create') ? 'active' : '' }} {{ request()->is('sliders') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false"
                     aria-controls="slider">
                     <span class="menu-title">Slider</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse{{ request()->is('slider_create') ? 'show' : '' }} {{ request()->is('sliders') ? 'show' : '' }}"
                     id="slider">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('slider_create') ? 'active' : '' }}"
                                 href="{{ url('/slider_create') }}">Add Slider</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('sliders') ? 'active' : '' }}"
                                 href="{{ url('/sliders') }}">All Slider</a>
                         </li>
                     </ul>
                 </div>
             </li>






             <!----------------- For Category ----------->
             <li
                 class="nav-item {{ request()->is('category_create') ? 'active' : '' }} {{ request()->is('categories') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false"
                     aria-controls="category">
                     <span class="menu-title">Category</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse{{ request()->is('category_create') ? 'show' : '' }} {{ request()->is('categories') ? 'show' : '' }}"
                     id="category">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('category_create') ? 'active' : '' }}"
                                 href="{{ url('/category_create') }}">Add Category</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('categories') ? 'active' : '' }}"
                                 href="{{ url('/categories') }}">All Category</a>
                         </li>
                     </ul>
                 </div>
             </li>


             <!----------------- For Sub Category ----------->
             <li
                 class="nav-item {{ request()->is('subcategory_create') ? 'active' : '' }} {{ request()->is('subcategories') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#subcat" aria-expanded="false"
                     aria-controls="subcat">
                     <span class="menu-title">Sub Category</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse {{ request()->is('subcategory_create') ? 'show' : '' }} {{ request()->is('subcategories') ? 'show' : '' }}"
                     id="subcat">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('subcategory_create') ? 'active' : '' }}"
                                 href="{{ url('/subcategory_create') }}">Add Sub Category
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('subcategories') ? 'active' : '' }}"
                                 href="{{ url('/subcategories') }}">All Sub Category </a>
                         </li>
                     </ul>
                 </div>
             </li>


             <!----------------- For Brand ----------->
             <li
                 class="nav-item {{ request()->is('brand_create') ? 'active' : '' }} {{ request()->is('brands') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#brand" aria-expanded="false"
                     aria-controls="brand">
                     <span class="menu-title">Brand</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse {{ request()->is('brand_create') ? 'show' : '' }} {{ request()->is('brands') ? 'show' : '' }}"
                     id="brand">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('brand_create') ? 'active' : '' }}"
                                 href="{{ url('/brand_create') }}"> Add Brand</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('brands') ? 'active' : '' }}"
                                 href="{{ url('/brands') }}"> All Brand</a>
                         </li>
                     </ul>
                 </div>
             </li>



             <!----------------- For Unit ----------->
             <li
                 class="nav-item {{ request()->is('units/create') ? 'active' : '' }} {{ request()->is('units') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#unit" aria-expanded="false"
                     aria-controls="unit">
                     <span class="menu-title">Unit</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse {{ request()->is('units/create') ? 'show' : '' }} {{ request()->is('units') ? 'show' : '' }}"
                     id="unit">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('units/create') ? 'active' : '' }}"
                                 href="{{ url('/units/create') }}" href="{{ url('/units/create') }}">Add Unit </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('units') ? 'active' : '' }}"
                                 href="{{ url('/units') }}" href="{{ url('/units') }}">All Unit </a>
                         </li>
                     </ul>
                 </div>
             </li>



             <!----------------- For Size ----------->
             <li
                 class="nav-item {{ request()->is('sizes/create') ? 'active' : '' }} {{ request()->is('sizes') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#size" aria-expanded="false"
                     aria-controls="size">
                     <span class="menu-title">Size</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse {{ request()->is('sizes/create') ? 'show' : '' }} {{ request()->is('sizes') ? 'show' : '' }}"
                     id="size">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('sizes/create') ? 'active' : '' }}"
                                 href="{{ url('/sizes/create') }}">Add Size</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('sizes') ? 'active' : '' }}"
                                 href="{{ url('/sizes') }}">All Size</a>
                         </li>
                     </ul>
                 </div>
             </li>

             <!----------------- For Color ----------->
             <li
                 class="nav-item {{ request()->is('colors/create') ? 'active' : '' }} {{ request()->is('colors') ? 'active' : '' }}">
                 <a class="nav-link" data-toggle="collapse" href="#color" aria-expanded="false"
                     aria-controls="color">
                     <span class="menu-title">Color</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                 </a>
                 <div class="collapse {{ request()->is('colors/create') ? 'show' : '' }} {{ request()->is('colors') ? 'show' : '' }}"
                     id="color">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('colors/create') ? 'active' : '' }}"
                                 href="{{ url('/colors/create') }}">Add Color </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{ request()->is('colors') ? 'active' : '' }}"
                                 href="{{ url('/colors') }}">All Color </a>
                         </li>
                     </ul>
                 </div>
             </li>




             <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
                     aria-controls="general-pages">
                     <span class="menu-title">General Pages</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-medical-bag menu-icon"></i>
                 </a>
                 <div class="collapse" id="general-pages">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">
                                 Blank Page </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/landing-page.html">
                                 Landing Page </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html">
                                 Profile </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a>
                         </li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2
                             </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html">
                                 News grid </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html">
                                 Timeline </a></li>
                         <li class="nav-item"> <a class="nav-link"
                                 href="pages/samples/search-results.html"> Search Results </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html">
                                 Portfolio </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/user-listing.html">
                                 User Listing </a></li>
                     </ul>
                 </div>
             </li>

             <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false"
                     aria-controls="e-commerce">
                     <span class="menu-title">E-commerce</span>
                     <i class="menu-arrow"></i>
                     <i class="mdi mdi-shopping menu-icon"></i>
                 </a>
                 <div class="collapse" id="e-commerce">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item"> <a class="nav-link"
                                 href="pages/samples/email-template.html"> Email Templates </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html">
                                 Invoice </a></li>
                         <li class="nav-item"> <a class="nav-link"
                                 href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                         <li class="nav-item"> <a class="nav-link"
                                 href="pages/samples/product-catalogue.html"> Product Catalogue </a>
                         </li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/project-list.html">
                                 Project List </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html">
                                 Orders </a></li>
                     </ul>
                 </div>
             </li>

             <li class="nav-item sidebar-actions">
                 <span class="nav-link">
                     <div class="border-bottom">
                         <h6 class="font-weight-normal mb-3">Projects</h6>
                     </div>
                     <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                 </span>
             </li>
         </ul>
     </nav>
     <!-- partial -->
