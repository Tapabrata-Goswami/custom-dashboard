<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== FontAwsome ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ===== FontAwsome ===== -->
    <!-- ===== Fontfamily ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
    <!-- ===== Fontfamily ===== -->
    <!-- ===== Stylesheet ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ===== Stylesheet ====== -->
    <title>Admin Dashboard</title>
</head>

<body>
    <!-- ====DashBoard Header Start==== -->
    <header class="admin-header">
        <nav class="dash-navigation">
            <div class="dash-menu-logo">
                <div class="dash-logo"><i class="fa-brands fa-shopware"></i></div>
                <div class="dash-menu">
                    <ul>
                        <li><a href="">eCommerce</a></li>
                        <li><a href="">Campagnes</a></li>
                        <li><a href="">Automation</a></li>
                        <li><a href="">Developer</a></li>
                        <li><a href="">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="dash-account">
                <i class="fa-solid fa-fingerprint"></i><span> Tapabrata </span><i class="fa-solid fa-sort-down"></i>
            </div>
        </nav>
    </header>
    <!-- ====DashBoard Header End==== -->

    <!-- ======Main Content Section Start======= -->
    <section class="main">

        <!-- ADMIN SIDE BAR START -->
        <div class="admin-sidebar">
            <div class="admin-sidebar-menu">
                <ul>
                    <li><i class="fa-solid fa-house"></i> <a href="">Home</a></li>
                    <li id="active"><i class="fa-solid fa-box-archive"></i> <a href="">Product</a></li>
                    <li><i class="fa-solid fa-boxes-stacked"></i> <a href="">Category</a></li>
                    <li><i class="fa-solid fa-gear"></i> <a href="">Setting</a></li>
                </ul>
            </div>
        </div>
        <!-- ADMIN SIDE BAR END -->

        <div class="admin-content-area">

            <!-- PRODUCT LIST && PRODUCT UPLOADING AREA START -->
            <div class="admin-product-area" style="display: none;">
                <div class="product-header">
                    <div class="fliter"></div>
                    <div class="admin-add-product">
                        <div class="admin-search-product">
                            <input class="admin-search-input" type="text" id="search-product">
                            <input class="admin-search-button" type="submit" value="Search">
                        </div>
                        <a href=""><i class="fa-solid fa-plus"></i> Add Product</a>
                    </div>
                </div>


                <div class="admin-prduct-list">
                    <table id="Admin-Product-List">
                        <thead class="admin-thead">
                            <tr>
                                <th>Sl. No.</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Catagory</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="admin-tdata">
                            <tr>
                                <td>1.</td>
                                <td><img class="list-product-image" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt=""></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing</td>
                                <td>Shoe</td>
                                <td>$10.00</td>
                                <td><span class="product-status">Active</span></td>
                                <td><span class="product-Edit">Edit</span><span class="product-Delete">Delete</span></td>
                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><img class="list-product-image" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt=""></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing</td>
                                <td>Shoe</td>
                                <td>$100.00</td>
                                <td><span class="product-status">Active</span></td>
                                <td><span class="product-Edit">Edit</span><span class="product-Delete">Delete</span></td>
                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><img class="list-product-image" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt=""></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing</td>
                                <td>Shoe</td>
                                <td>$100.00</td>
                                <td><span class="product-status">Active</span></td>
                                <td><span class="product-Edit">Edit</span><span class="product-Delete">Delete</span></td>
                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><img class="list-product-image" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt=""></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing</td>
                                <td>Shoe</td>
                                <td>$100.00</td>
                                <td><span class="product-status">Active</span></td>
                                <td><span class="product-Edit">Edit</span><span class="product-Delete">Delete</span></td>
                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><img class="list-product-image" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt=""></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing</td>
                                <td>Shoe</td>
                                <td>$100.00</td>
                                <td><span class="product-status">Active</span></td>
                                <td><span class="product-Edit">Edit</span><span class="product-Delete">Delete</span></td>
                                
                            </tr>
                            
                        </tbody>

                    </table>
                </div>


            </div>
            <!-- PRODUCT LIST && PRODUCT UPLOADING AREA END -->

        </div>
    </section>
    <!-- ======Main Content Section End======= -->


    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/dash.js"></script>
</body>

</html>