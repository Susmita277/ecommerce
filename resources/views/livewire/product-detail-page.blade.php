 <!--product details start-->
    <main class="p-12">
         
        <section class="bg-background font-forum  overflow-hidden py-12  ">
            <div class="  lg:flex lg:justify-between gap-10 w-full h-fit">
                <div class="lg:grid lg:grid-cols-1 flex justify-between flex-wrap gap-4 ">
                    <img src="https://ruheindia.com/cdn/shop/files/Artboard_2_1.25x.png?v=1746091275&width=320"
                        alt="sanitary-item" class="rounded-md lg:w-[200px] lg:h-[150px]  bg-base">
                    <img src="https://ruheindia.com/cdn/shop/files/2_c743bf71-95e4-49e7-9e1f-758f81117a2d.png?v=1744180868&width=320"
                        alt="sanitary-item" class="rounded-md lg:w-[200px] lg:h-[150px]  bg-base">
                    <img src="https://ruheindia.com/cdn/shop/files/02_732297ee-8ef2-42f2-ae3d-ada852682d91.png?v=1742211774&width=320"
                        alt="sanitary-item" class="rounded-md lg:w-[200px] lg:h-[150px]  bg-base">
                </div>
                <div class="h-[500px] w-[400px] bg-base ">
                    <img alt="ecommerce" :src="product.image"
                        class="w-full h-full object-cover items-stretch rounded-md">
                </div>
                <div class="lg:w-1/2 w-full   lg:mt-0">
                    <h3 x-text="product.name"></h3>
                    <div class="flex gap-1 items-center py-2">
                        <span class="text-gray-500 text-md">RS.</span>
                        <h3 class="py-2" x-text="product.price"></h3>
                        <span class="font-bold text-md font-[var(--font-poppins)] ">/Pcs</span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus deleniti maiores officiis voluptatibus, illo illum! Laboriosam
                    </p>

                    <div class="my-4">
                        <h5> Quantity</h5>
                        <div class="border border-gray-200 rounded-md p-2 grid grid-cols-3 gap-1 mt-2 w-[120px]">
                            <div class="p-1 rounded-md bg-gray-200  flex items-center justify-center ">
                                <span x-hugeicon:plus class="w-5 h-5 "></span>
                            </div>
                            <div class="flex items-center justify-center">
                                <span>1</span>
                            </div>
                            <div class="p-1 rounded-md bg-gray-200  flex items-center justify-center">
                                <span x-hugeicon:minus class="w-5 h-5 "></span>
                            </div>
                        </div>
                    </div>

                    <div class="flex  py-4 gap-4">
                        <div class="btn flex gap-2 items-center">
                            <span x-hugeicon:cart class="w-5 h-5 "></span>
                            <button type="button" class="outline-none">Add to Cart</button>
                        </div>
                        <div
                            class=" py-2 px-6 outline-none rounded-md transition-all capitalize text-[16px] font-semibold bg-[var(--color-accent)] text-white hover:opacity-70 flex gap-2 items-center">
                            <span x-hugeicon:favourite class="w-5 h-5"></span>
                            <button type="button" class="outline-none">Saved</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="border  border-gray-200">
            <h4 class="py-2 border-b border-gray-200 hover:text-primary px-8">Description</h4>
            <p class="p-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, quis harum animi nobis
                nostrum fugiat similique provident dolor temporibus molestiae culpa possimus eum architecto aut
                laboriosam commodi dolore? Soluta, possimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, quis harum animi nobis nostrum fugiat
                similique provident dolor temporibus molestiae culpa possimus eum architecto aut laboriosam commodi
                dolore? Soluta, possimus.<br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, quis harum animi nobis nostrum fugiat
                similique provident dolor temporibus molestiae culpa possimus eum architecto aut laboriosam commodi
                dolore? Soluta, possimus.
            </p>
        </section>

        <section class="py-12 ">
            <h3 class="text-center">You May Also Like</h3>
            <ul class="grid grid-cols-4 gap-4 relative py-8 ">
                <div class="border border-gray-200 rounded-xl p-3">
                    <div class="relative">
                        <img src="https://ruheindia.com/cdn/shop/files/4_ff2cffe2-1fbc-43a8-bf2f-d20186d332a0.png?v=1733824662&width=900"
                            class="rounded-xl ">
                        <div
                            class="absolute top-2 right-2 rounded-full p-2   flex items-center bg-[var(--color-accent)] hover:opacity-70">
                            <span x-hugeicon:favourite class="w-6 h-6 t text-white "></span>
                        </div>
                    </div>
                    <div class="py-2">
                        <h5 class="py-1">Choco Brown Quartz Single Bowl Kitchen Sink
                        </h5>
                        <h5 class="py-1">Rs.6,200.00
                        </h5>
                        <div class="flex gap-1 items-center py-1">
                            <span class="text-gray-500 line-through">Rs.8,158.00</span>
                            <span class="text-[var(--color-primary)]">24% off</span>
                        </div>
                    </div>
                    <div class="mbtn text-center">add to cart</div>
                </div>
                <div class="border border-gray-200 rounded-xl p-3">
                    <div class="relative">
                        <img src="https://ruheindia.com/cdn/shop/files/4_ff2cffe2-1fbc-43a8-bf2f-d20186d332a0.png?v=1733824662&width=900"
                            class="rounded-xl ">
                        <div
                            class="absolute top-2 right-2 rounded-full p-2   flex items-center bg-[var(--color-accent)] hover:opacity-70">
                            <span x-hugeicon:favourite class="w-6 h-6 t text-white "></span>
                        </div>
                    </div>
                    <div class="py-2">
                        <h5 class="py-1">Choco Brown Quartz Single Bowl Kitchen Sink
                        </h5>
                        <h5 class="py-1">Rs.6,200.00
                        </h5>
                        <div class="flex gap-1 items-center py-1">
                            <span class="text-gray-500 line-through">Rs.8,158.00</span>
                            <span class="text-[var(--color-primary)]">24% off</span>
                        </div>
                    </div>
                    <div class="mbtn text-center">add to cart</div>
                </div>
                <div class="border border-gray-200 rounded-xl p-3">
                    <div class="relative">
                        <img src="https://ruheindia.com/cdn/shop/files/4_ff2cffe2-1fbc-43a8-bf2f-d20186d332a0.png?v=1733824662&width=900"
                            class="rounded-xl ">
                        <div
                            class="absolute top-2 right-2 rounded-full p-2   flex items-center bg-[var(--color-accent)] hover:opacity-70">
                            <span x-hugeicon:favourite class="w-6 h-6 t text-white "></span>
                        </div>
                    </div>
                    <div class="py-2">
                        <h5 class="py-1">Choco Brown Quartz Single Bowl Kitchen Sink
                        </h5>
                        <h5 class="py-1">Rs.6,200.00
                        </h5>
                        <div class="flex gap-1 items-center py-1">
                            <span class="text-gray-500 line-through">Rs.8,158.00</span>
                            <span class="text-[var(--color-primary)]">24% off</span>
                        </div>
                    </div>
                    <div class="mbtn text-center">add to cart</div>
                </div>
                <div class="border border-gray-200 rounded-xl p-3">
                    <div class="relative">
                        <img src="https://ruheindia.com/cdn/shop/files/4_ff2cffe2-1fbc-43a8-bf2f-d20186d332a0.png?v=1733824662&width=900"
                            class="rounded-xl ">
                        <div
                            class="absolute top-2 right-2 rounded-full p-2   flex items-center bg-[var(--color-accent)] hover:opacity-70">
                            <span x-hugeicon:favourite class="w-6 h-6 t text-white "></span>
                        </div>
                    </div>
                    <div class="py-2">
                        <h5 class="py-1">Choco Brown Quartz Single Bowl Kitchen Sink
                        </h5>
                        <h5 class="py-1">Rs.6,200.00
                        </h5>
                        <div class="flex gap-1 items-center py-1">
                            <span class="text-gray-500 line-through">Rs.8,158.00</span>
                            <span class="text-[var(--color-primary)]">24% off</span>
                        </div>
                    </div>
                    <div class="mbtn text-center">add to cart</div>
                </div>

            </ul>
        </section>
    </main>