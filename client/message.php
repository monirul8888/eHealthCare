<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Chat app</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');



body{
    font-family: "Open Sans", sans-serif;
    display: grid;
    place-content: center;
    background-color: #ebebeb;
}

.title{
    margin: 20px 0;

}

.main{
    border: 8px solid #dddddd;
    border-radius: 24px;
    overflow: hidden;
}

.name{
    display: flex;
    font-size: 32px;
    font-weight: 700;
    padding: 8px 16px;
    color: #7e7e7e;
    background-color: #ebebeb;
    
}

.name > span{
    color: #bbb;
}

.name-input{
    font-size: 24px;
    font-weight: 700;
    color: #7e7e7e;
    flex-grow: 1;
    border: none;
    margin: 0px 12px;
    outline: none;
    background-color: #ebebeb;
}

.message-container{
    display: flex;
    flex-direction: column;
    background-color: #f6f6f6;
    width: 400px;
    height: 600px;
    overflow-y: auto;
    overflow-x: hidden;

}

.message-left,.message-right{
    list-style: none;
    padding: 8px 12px;
    margin: 12px;
    max-width: 250px;
    font-size: 18px;
    word-wrap: break-word;
}

.message-left{
    border-radius: 20px 20px 20px 0px;
    align-self: flex-start;
    background-color: #fff;
    box-shadow: -2px 2px 4px #dcdcdc;
}
.message-right{
    border-radius: 20px 20px 0px 20px;
    align-self: flex-end;
    background-color: #2d2d2d;
    box-shadow: 2px 2px 4px #dcdcdc;
    color: #f6f6f6;
}

.message-left>p>span,.message-right>p>span{
    display: block;
    font-style: italic;
    font-size: 12px;
    margin-top: 4px;
}

.feedback{
    font-style: italic;
    font-size: 14px;
    padding: 0px 16px 16px 16px;
    color: #2d2d2d;
    text-align: center;
}

.message-form{
    display: flex;
    justify-content: space-between;
    width: 400px;
}

.message-input{
    flex-grow: 1;
    height: 48px;
    font-size: 16px;
    border: none;
    outline: none;
    padding: 0 12px;
    background-color: #fff;
}

.send-button{
    height: 48px;
    font-size: 16px;
    border: none;
    padding: 0px 20px;
    outline: none;
    background-color: #fff;
    cursor: pointer;
}

.v-divder{
    height: 48px;
    width: 2px;
    background-color: #f6f6f6;
}

.clients-total{
    margin: 2px 0;
    color: #7e7e7e;
    text-align: center;
}

    </style>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="header">
            <h2>Welcome To E-Health Care</h2>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="doctors.php">Doctors</a>
                
                <a href="services.php">Services</a>
                <a href="adminPatForm.php">Sign Up</a>
                <a href="login.php">Log In</a>
                <a href="about.php">About Us</a>
            </div>
            <div class="search-bar-wrapper">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button>Search</button>
                </div>
            </div>

        </div>

        <div class="content">
        <h1 class="title">
        eHealthCare Messanger
    </h1>

    <div class="main">

        <div class="name">
            <span>
                <i class="far fa-user"></i>

                <input type="text" 
                id="name-input" 
                class="name-input" 
                value="anonymous" 
                maxlength="20">

            </span>
        </div>
        <ul class="message-container" id="message-container">

            <li class="message-left">
                <p class="message">
                    <span>
                        
                    </span>
                </p>
            </li>


            <li class="message-right">
                <p class="message">
                    <span>
                       
                    </span>
                </p>
            </li>

            <li class="message-feedback">
                <p class="feedback" id="feedback">
                anonymous is typing the message
                </p>
            </li>

        </ul>

        <form  class="message-form" id="message-form">

            <input type="text" name="message" id="message-input" class="message-input">

            <div class="v-divider"></div>

            <button type="submit" class="send-button">send <span ><i class="fas fa-paper-plane"></i> </span></button>
        </form>

        
    </div>
        </div>




 


</body>
</html>