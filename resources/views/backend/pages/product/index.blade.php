@extends('backend.layout.main');

@section('content')

<body class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">
<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
                
                <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                    <div class="grow">
                        <h5 class="text-16">Products</h5>
                    </div>
                    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                        <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                            <a href="#!" class="text-slate-400 dark:text-zink-200">Admin</a>
                        </li>
                        <li class="text-slate-700 dark:text-zink-100">
                            Products
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-1 2xl:grid-cols-12 gap-x-5 ">
                    <div class="2xl:col-span-9">
                        <div class="grid grid-cols-1 mt-5 md:grid-cols-2 [&.gridView]:grid-cols-1 xl:grid-cols-4 group [&.gridView]:xl:grid-cols-1 gap-x-5" id="cardGridView">
                            <div class="card md:group-[.gridView]:flex relative">
                                <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                                    <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6 active"><i data-lucide="heart" class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                                    <div class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                                        <img src="assets/images/img-02.png" alt="" class="group-[.gridView]:h-16">
                                    </div>
                                </div>
                                <div class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                                    <div class="group-[.gridView]:grow">
                                        <h6 class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500"><a href="apps-ecommerce-product-overview.html">Mesh Ergonomic Black Chair</a></h6>

                                        <div class="flex items-center text-slate-500 dark:text-zink-200">
                                            <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line"></i>
                                            </div>
                                            (198)
                                        </div>
                                        <h5 class="mt-4 text-16">$674.12 <small class="font-normal line-through text-slate-500 dark:text-zink-200">784.99</small></h5>
                                    </div>

                                    <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                                        <button type="button" class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i data-lucide="shopping-cart" class="inline-block w-3 h-3 leading-none"></i> <span class="align-middle">Add to Cart</span></button>
                                        <div class="relative float-right dropdown">
                                            <button class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="productList1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="w-3 h-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="productList1">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-product-overview.html"><i data-lucide="eye" class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-product-create.html"><i data-lucide="file-edit" class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col & card-->
                        </div><!--end grid-->

                    </div><!--end col-->
                </div><!--end grid-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        
    </div>

</div>
<!-- end main content -->

</div>
</body>
</html>
@endsection