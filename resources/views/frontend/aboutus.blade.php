@extends('frontend.layout.app')
{{-- @section('links')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
@endsection --}}
@section('content')
    <div class="bannertext">
        <h1 class="contact">About Us</h1>
    </div>
    <div class="aboutus-container">
        <div class="aboutus-top-textarea">
            <p>Great Future Mart, established in 2077, is a company dedicated to natural ingredient
                products like hair oil,shampoo, green tea, and papaya sunscreen.
                They prioritize quality, sustainability, and eco-friendly practices while inviting
                customers to join them on their journey towards a healthier and more sustainable future.</p>
        </div>
        <div class="aboutus-secondmain-container">
            <div class="aboutus-imageandtext-container">
                <div class="aboutus-images"><img class="aboutus-img" src="{{ asset('frontend/images/alovera.avif') }}"
                        alt="Alovera"></div>
                <div class="aboutus-textarea">
                    <h3>Our Mission and Vision</h3> <br>
                    <p>Great Future Mart, founded in 2077 B.S., is dedicated to revolutionizing
                        the natural ingredient product industry. Our vision is to lead in innovation
                        and quality, promoting healthier lives and environmental responsibility. <br> <br>
                        We provide high-quality, all-natural products, prioritize sustainability,
                        empower communities, educate consumers, and continuously improve our offerings.
                        We believe in the transformative power of nature and invite everyone to join us
                        in creating a healthier, more sustainable future, one natural ingredient at a time
                    </p>
                </div>
            </div>

            <div class="aboutus-imageandtext-container">
                <div class="aboutus-textarea">
                    <h3>Infrastructure</h3> <br>
                    <p>Great Future Mart has been devoted to a clean manufacturing infrastructure from its inception,
                        with a focus on the development of pure essential oils and other natural products.
                        Furthermore, the organization employs cutting-edge machinery and equipment to create high-quality
                        formulae for a variety of products. <br> <br>
                        We follow Good Manufacturing Practices (GMP) standards and
                        regulations in our manufacturing facility, which employs environmentally-friendly equipment to
                        produce best-in-class products,Know More.</p>

                </div>
                <div class="aboutus-images"><img class="aboutus-img"
                        src="{{ asset('frontend/images/infrastructure.avif') }}" alt="infrastructure"></div>
            </div>




            <div class="aboutus-imageandtext-container">
                <div class="aboutus-images"><img class="aboutus-img" src="{{ asset('frontend/images/lab tested.avif') }}"
                        alt="lab test"></div>
                <div class="aboutus-textarea">
                    <h3>Lab Tested Products & Quality Control</h3> <br>
                    <p>Our research and development (R & D) team is actively creating new products based on
                        essential oils, herbal extracts, cosmetic raw material, and fragrances oil while
                        maintaining their authenticity and purity. <br> <br>
                        We have begun application-oriented research in the field of aromatic oils
                        and essential oils. We are constantly inventing new formulas in order to
                        satisfy our customers and match their ever-increasing demands</p>
                </div>
            </div>

            <div class="aboutus-imageandtext-container">
                <div class="aboutus-textarea">
                    <h3> Packaging</h3> <br>
                    <p> Our team carefully packs our high-quality organic oils and other natural products in
                        protective packaging to ensure safe delivery. Depending on the quantity, each product is
                        packaged in a variety of sizes of boxes, bottles, and containers . <br> <br>In addition, all of our
                        products are properly packed in sanitary circumstances. The Best part about our packaging
                        is that it actively contributes to our products' overall credibility and physical features</p>

                </div>
                <div class="aboutus-images"><img class="aboutus-img" src="{{ asset('frontend/images/packaging.jpg') }}"
                        alt="infrastructure"></div>
            </div>
        </div>
    </div>

    
        
    </div>
@endsection


