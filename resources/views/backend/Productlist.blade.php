<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link rel="stylesheet" href="{{ asset('backend/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-9a55d8748fd46de7b7977d9ee8dee7a4.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">


    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="Productlist-maincontainer">
        <div class="top-flexitem">
            <div>
                <h2>Product List</h2>
            </div>
            <div class="icon"> <label for="upload" class="upload-item">
                    <i class="fa-duotone fa-cloud-arrow-up"></i>
                    <p>Upload</p>
                </label>
                <input type="file" name="" id="upload" hidden>
                <button> <i class="fa-duotone fa-plus"></i> Create new</button>
            </div>
        </div>
        <div class="productlist-container">
            <div class="producttop-container">
                <div> <input type="search" placeholder="searchhere"></div>
                <div> <input type="text" id="category" list="categoryList" placeholder="Category">
                    <datalist id="categoryList">
                        <option value="Beauty">
                        <option value="Health">
                        <option value="Kitchen">
                        <option value="Hair Care">
                        <option value="Body Care">
                    </datalist>
                </div>
            </div>
            <div class="Grid-product">
                <div class="productlist p-2">
                    <div class="productlist-image">
                        <img src="{{ asset('frontend/images/aloevera-fashwash.jpg') }}" alt="aloevera-fashwash">
                    </div>
                    <div>
                        <p>Aloevera-fashwash</p>
                        <p>Rs.250</p>
                        <button class="hover:text-green-400"><i class="fa-light fa-pen-to-square"></i>Edit</button>
                        <button><i class="fa-solid fa-trash"></i>Delete</button>
                    </div>
                </div>
                <div class="productlist">
                    <div class="productlist-image">
                        <img src="{{ asset('frontend/images/papaya.jpg') }}" alt="Papaya-sunscream">
                    </div>
                    <div>
                        <p>Papaya-sunscream</p>
                        <p>Rs.295</p>
                        <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                        <button><i class="fa-solid fa-trash"></i>Delete</button>
                    </div>
                </div>
                <div class="productlist">
                    <div class="productlist-image">
                        <img src="{{ asset('frontend/images/blotion.jpg') }}">

                    </div>
                    <div>
                        <p>Product-name</p>
                        <p>price</p>
                        <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                        <button><i class="fa-solid fa-trash"></i>Delete</button>
                    </div>
                </div>
                <div class="productlist">
                    <div class="productlist-image">
                        <img src="{{ asset('frontend/images/hair damage.jpg') }}">
                    </div>
                    <div>
                        <p>Product-name</p>
                        <p>price</p>
                        <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                        <button><i class="fa-solid fa-trash"></i>Delete</button>
                    </div>
                </div>
                <div class="productlist">
                    <div class="productlist-image">
                        <img src="{{ asset('frontend/images/GreenTea.png') }}">
                    </div>
                    <div>
                        <p>Product-name</p>
                        <p>price</p>
                        <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                        <button><i class="fa-solid fa-trash"></i>Delete</button>
                    </div>
                </div>
                <div class="productlist">
                    <div class="productlist-image">
                        <img src="{{ asset('frontend/images/lotus.png') }}">
                    </div>
                    <div>
                        <p>Product-name</p>
                        <p>price</p>
                        <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                        <button><i class="fa-solid fa-trash"></i>Delete</button>
                    </div>
                </div>
                <div class="productlist">
                    <div class="productlist-image">
                        <img src="{{ asset('frontend/images/oats.jpg') }}">
                    </div>
                    <div>
                        <p>Product-name</p>
                        <p>price</p>
                        <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                        <button><i class="fa-solid fa-trash"></i>Delete</button>
                    </div>
                </div>
                <div class="productlist">
                    <div class="productlist-image">
                        <img src="{{ asset('frontend/images/Ragi Powder.jpg') }}">
                    </div>
                    <div>
                        <p>Product-name</p>
                        <p>price</p>
                        <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                        <button><i class="fa-solid fa-trash"></i>Delete</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    <div class="bg-red-400 w-[23rem] md:w-[59rem] text-white h-auto p-4 m-2 rounded-lg text-center hover:bg-green-400">
        <div>hi there</div>
    </div>

    <div class="flex flex-wrap">
        <div class="p-2 ml-4 mb-4 w-40 h-60 md:w-64 md:h-80 border border-1 items-center rounded-sm">
            <img src="http://ecommerce.test/frontend/images/oats.jpg" class="rounded-md h-auto w-auto mx-auto"
                alt="try">
            <div class="ml-2 md:font-semibold md:text-lg">
                Product Name
            </div>
            <div class="ml-2">Price</div>
            <div class="flex gap-x-4 ml-2">
                <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                <button><i class="fa-solid fa-trash"></i>Delete</button>
            </div>
        </div>
        <div class="p-2 ml-4 mb-4 w-40 h-60 md:w-64 md:h-80 border border-1 items-center rounded-sm">
            <img src="http://ecommerce.test/frontend/images/oats.jpg" class="rounded-md h-auto w-auto mx-auto"
                alt="try">
            <div class="ml-2 md:font-semibold md:text-lg">
                Product Name
            </div>
            <div class="ml-2">Price</div>
            <div class="flex gap-x-4 ml-2">
                <button><i class="fa-light fa-pen-to-square"></i>Edit</button>
                <button><i class="fa-solid fa-trash"></i>Delete</button>
            </div>
        </div>        
    </div>

    <div>
        <table>
            
    </div>
</body>

</html>
