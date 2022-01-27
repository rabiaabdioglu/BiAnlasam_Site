
<?php
include "banner.php";
    
?>
<div class="chat">
    <div class="sidebar">
        <div class="search">
            <input type="text" placeholder="Ara..">
            <i class="fa fa-search"></i>
        </div>
        <div class="contacts">
            <ul>
                <li>
                    <a href="#">
                        <img src="icons/profile_picture.png" alt="">
                        <div class="contact">
                            <div class="name">Tayfun Erbilen</div>
                            <div class="message">Merhaba, bu bir test mesajıdır..</div>
                        </div>
                        <div class="notification"></div>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <img src="icons/profile_picture.png" alt="">
                        <div class="contact">
                            <div class="name">Tayfun Erbilen</div>
                            <div class="message">Merhaba, bu bir test mesajıdır..</div>
                        </div>
                        <div class="notification">3</div>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="message-header">
            <div class="user-info">
                <img src="icons/profile_picture.png" alt="">
                <div class="user">
                    <div class="name">Tayfun Erbilen</div>
                    <div class="time">10 dk önce</div>
                </div>
            </div>
            <div class="actions">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-info-circle"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="message-content">
            <div class="message me">
                <div class="bubble">
                    Merhaba tahsin dost, nasıl gidiyor keyifler?
                </div>
                <div class="time">1dk önce</div>
            </div>
            <div class="message">
                <div class="bubble">
                    Merhaba tahsin dost, nasıl gidiyor keyifler?
                </div>
                <div class="time">1dk önce</div>
            </div>
            
            
        </div>
        <div class="message-form">
            <ul>
               
                <li class="input">
                    <input type="text" placeholder="Bir şeyler yaz..">
                </li>
               
                </li>
                <li class="image-gonder">
                    <a href="#">
                        <i class="far fa-paper-plane"></i>                    </a>
                </li>
                <li class="image-gorsel">
                    <a href="#">
                        <i class="fa fa-image"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
	
    </div>
	
</body>
	

</html>
