{{-- recent news --}}
<div class=" Top-news-container">
    <div class="testimonial-heading">
        Recent news
    </div>
    <div class="News-container">
        <div class="first-news-container">
            <div class="news-image-container">
                <img class="news-image" src="{{ asset('frontend/images/grocery-product1.avif') }}" alt="">
            </div> <br>
            <span class="news-image-description">All cosmetic item available now</span>
            <div class="text-container">
                Lorem, ipsamus dicta aliquid saepe ut soluta iste,
                perferendis illum porro aperiam in sit non!
                Est excepturi aperiam corporis labore...
            </div>
            <div class="bottom-date-and-username">
                <p>August 30,2023|By  <span class="username">John Doe</span></p>
            </div>
        </div>
        <div class="second-news-container">
            <div class="news-image-container">
                <img class="news-image" src="{{ asset('frontend/images/grocery-product2.avif') }}" alt="">
            </div> <br>
            <span class="news-image-description">Soothing and hydrating the skin</span>
            <div class="text-container">
                Lorem, ipsamus dicta aliquid saepe ut soluta iste,
                perferendis illum porro aperiam in sit non!
                Est excepturi aperiam corporis labore...
            </div>
             <div class="bottom-date-and-username">
                <p>August 30,2023|By  <span class="username">John Doe</span></p>
            </div>

        </div>
        <div class="third-news-container">
            <div class="news-image-container">
                <img class="news-image" src="{{ asset('frontend/images/grocery-product3.avif') }}" alt="">
            </div> <br>
            <span class="news-image-description">Improving hair strength and elasticity</span>
            <div class="text-container">
                Lorem, ipsamus dicta aliquid saepe ut soluta iste,
                perferendis illum porro aperiam in sit non!
                Est excepturi aperiam corporis labore...
            </div>
            <div class="bottom-date-and-username">
                <p>August 30,2023|By  <span class="username">John Doe</span></p>
            </div>
        </div>
    </div>
</div>
<div class="button"><button class="news-button">view all news</button></div>

<style>
    .News-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        margin-left: 10%;
        width: 80%;
        margin-top: 2%;
        gap: 50px;
        overflow-x: hidden;
        box-sizing: border-box;
        padding: 10px;
    }

    .first-news-container,
    .second-news-container,
    .third-news-container {
        overflow: hidden;
    }

    .news-image {
        width: 100%;
        margin-top: 6%;
        margin-left: 6%;
        height: 40vh;
    }
    .news-image-description{
        padding-top: 10px;
         box-sizing: border-box;
        font-size: 1rem;
        font-family: "Poppins";
        font-weight: bolder;
        margin-left: 6%;
    }

    .text-container {
        color: #b0b0b0;
        font-family: "Poppins";
        margin-top: 6%;
        margin-left: 6%;
    }
    .bottom-date-and-username{
        border-top:1px solid #b0b0b0;
        margin-left: 6%;
        margin-top: 4%;
        padding: 5px;
    }
    .username{
    color: #D2042d;
        
    }
    .button{
        display: flex;
        justify-content: center;
        margin-top: 1.5%;
    }
    .news-button{
        color: white;
        background-color: #D2042d;
        border: none;
        outline: none;
        box-sizing: border-box;
        padding: 14px;
        width: 150px;
        font-size: 0.9rem;
        letter-spacing: 1px;
        
      
    }
</style>
