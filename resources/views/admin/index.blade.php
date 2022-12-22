@section('layouts.main')
@endsection

<div class="wrapper">
    <div class="profile">
        <div class="overlay">
            <div class="about d-flex flex-column">
                <h4>Kim Sarah</h4> <span>Software Developer</span>
            </div>
            <ul class="social-icons">
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-linkedin"></i></li>
                <li><i class="fa fa-twitter"></i></li>
                <li><i class="fa fa-instagram"></i></li>
            </ul>
        </div>
    </div>
</div>

<style>
    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: rgb(219, 185, 185)
    }

    .profile {
        position: relative;
        width: 350px;
        height: 350px;
        background: url("https://i.vgy.me/YgaK1o.png");
        background-size: cover;
        cursor: pointer;
        border: 12px;
        
        border-radius: 6px
    }

    .overlay {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        border-radius: 12px;
        cursor: pointer;
        opacity: 0;
        transition: all 1s;
        
        border-radius: 6px
    }

    .profile:hover .overlay {
        opacity: 1
    }

    .social-icons {
        display: flex;
        list-style: none;
        bottom: 10px;
        position: absolute;
        text-align: center;
        justify-content: center;
        left: 22px
    }

    .social-icons li {
        width: 25px;
        height: 25px;
        border: 1px solid #eee;
        padding: 20px;
        margin-right: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        border-radius: 5px;
        transition: all 1s
    }

    .social-icons li:hover {
        background: #fff;
        color: #000
    }

    .overlay .about {
        position: relative;
        justify-content: center;
        align-items: center;
        display: flex;
        top: 40%;
        color: #fff;
        flex: column
    }
</style>
