<div class="main-testimonial-container">
   <div class="testimonial-heading">
    What Customer Say
    </div>
    <div class="testimonial-container">
        <div class="testimonial-first-container">
            <div class="image-container">
                <div class="leftitem-container">
                    <img class="image" src="{{ asset('frontend/images/client-1.jpg') }}" alt="customer">
                </div>
                <div class="rightitem-container">
                    <span class="customer-name">John Doe</span> <br>
                    <span class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
            </div>
            <div class="message-container">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Sunt voluptatem, dolorem numquam facilis minus necessitatibus ut quis saepe illo
                voluptate,nulla laborum et minima perferendis aut eveniet maxime, deserunt sequi? <br> <br> </div>
        </div>
        <div class="testimonial-second-container">
            <div class="image-container">
                <div class="leftitem-container">
                    <img class="image" src="{{ asset('frontend/images/client-2.jpg')}}" alt="customer">

                </div>
                <div class="rightitem-container">
                    <span class="customer-name">Eliza Thapa</span> <br>
                    <span class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
            </div>
            <div class="message-container">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Minima est temporibus illo voluptatibus quam hic repellendus 
                reprehenderit soluta ea quia, animi, necessitatibus corporis
                 quibusdam ducimus expedita doloremque enim, tempore nobis! <br> <br>
            </div>
        </div>
        <div class="testimonial-third-container">
            <div class="image-container">
                <div class="leftitem-container">
                    <img class="image" src="{{ asset('frontend/images/client-3.jpeg') }}" alt="customer">

                </div>
                <div class="rightitem-container">
                    <span class="customer-name">Harry Potter</span> <br>
                    <span class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
            </div>
            <div class="message-container">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                 Eveniet, harum quos placeat libero aut recusandae dolores
                  quia repudiandae corrupti. Nesciunt rem quam non possimus 
                  adipisci sint quidem, ab temporibus ex! <br> <br>
            </div>
        </div>
    </div>
</div>



<style>
    .main-testimonial-container {
        background-color: #f8f2eb;
        width: 100%;
        height: 90vh;
        margin-top: 5%;
    
    }

    .testimonial-heading{
        font-family: "Poppins";
        display: flex;
        font-size: 30px;
        padding-top: 5%;
        font-weight: bolder;
        letter-spacing: 1px;
        justify-content: center;
        box-sizing: border-box;
    }

    .testimonial-container {
        display: grid;
        width: 80%;
        margin-top: 2%;
        grid-template-columns: repeat(3, 1fr);
        gap: 50px;
        margin-left: 10%;
        box-sizing: border-box;
        padding: 10px;
    }

    .testimonial-first-container,
    .testimonial-second-container,
    .testimonial-third-container {
        background-color: #ffffff;
    }

    /* image container */
    .image-container {
        width: 100%;
        margin-top: 6%;
        margin-left: 6%;
        display: flex;
    

    }

    .leftitem-container {
        width: 40%;

    }
    .rightitem-container{
       width:55%;
       margin-top: 6%;
    }
    .rightitem-container .star-icon{
        display: flex;
        color: #f0a843;
        width: 10px;
        gap: 1%;
    }
    /* rigthitem-container */
    .customer-name{
       font-family: "Poppins";
       font-size: 20px;
    }

    .message-container {
        color: #b0b0b0;
        font-family: "Poppins";
        margin-top: 6%;
        margin-left: 6%;

    }

    .image {
        border-radius: 100%;
        width: 80%;
        margin-top: 6%;
    }
</style>
