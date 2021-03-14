<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ITWM82Dashboard</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        jQuery(document).ready(function($){
            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        })
        </script>
        <style>
            body {
        overflow-x: hidden;
        }
        #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
        }
        #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        }
        #sidebar-wrapper .list-group {
        width: 15rem;
        }
        #page-content-wrapper {
        min-width: 100vw;
        }
        #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
        }
        @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }
        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
        }
        </style>    
    </head>
    <body>
        <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Activities side bars </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Activity 1</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Activity 2</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Activity 3</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Activity 4</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Activity 5</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Activity 6</a>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li>
            </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <h1 class="mt-4">ITWM82 Activity 3 Dashboard Creation</h1>
            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum veritatis neque dolorem dicta quaerat iure, exercitationem odio, autem illo impedit id non cumque aperiam, expedita assumenda mollitia reiciendis ipsam molestiae vel aspernatur ipsum animi voluptates? Autem perspiciatis sapiente perferendis enim explicabo ipsam atque pariatur voluptatem! Qui saepe aspernatur neque? Perferendis!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat amet, consequatur, excepturi, voluptatum unde assumenda recusandae voluptas sed totam expedita ea libero similique. Perspiciatis dolores voluptatum optio impedit dolor quae unde quidem id earum officiis iste vel quod, veritatis quos aspernatur repellat illo fuga sit asperiores. Minima libero illo veritatis voluptatum eum deserunt dolores blanditiis dolorum nisi perferendis tenetur ex accusantium nostrum minus, fugit eius corporis fuga repellendus quisquam deleniti expedita error sapiente qui asperiores? Ad in quaerat alias ea consectetur! Dolore impedit eaque neque tenetur, quisquam quis! Sunt qui consequatur voluptas ut beatae optio eum nesciunt, natus praesentium reprehenderit!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam at deleniti consectetur quod obcaecati voluptatem ad alias ipsam commodi dolorem temporibus consequatur modi dignissimos, numquam fugit eos facilis voluptates qui. At molestias quae velit natus harum atque dolorum ab illum quis culpa impedit, odio debitis nemo placeat sed hic error eveniet! Nihil similique repellat dolores dicta ipsa sequi deserunt, ipsam ratione at rem eaque enim accusantium debitis quaerat, quisquam dolorum! Ut libero pariatur quibusdam nesciunt esse voluptates similique nemo illum inventore sequi dolore corrupti perspiciatis in doloremque hic, labore placeat reiciendis incidunt aspernatur obcaecati quisquam temporibus unde voluptas? Rerum, beatae dolorem quis vero libero doloremque? Assumenda perferendis mollitia similique, rem sit sequi corrupti magnam iure dicta natus a. Officia corrupti, maxime excepturi, dolorem reiciendis error iusto explicabo expedita deleniti sequi suscipit? Modi repellat quo suscipit debitis cupiditate! Illo ad impedit nisi consequatur praesentium beatae cumque temporibus expedita commodi veniam omnis animi aspernatur numquam fuga, repellendus minus, saepe eius fugiat? Vero quibusdam deserunt aperiam. Laborum iste voluptate nulla nihil earum ipsa consequatur exercitationem amet a aperiam? Ipsam accusamus, accusantium quo culpa itaque maxime, dolore praesentium error quia commodi neque tempore illum quidem reiciendis a magni sequi necessitatibus provident nam voluptates cupiditate.</p>
        </div>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        
    </body>
</html>