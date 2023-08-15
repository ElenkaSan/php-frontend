<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap CompanyName</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    .car {
      color: black; 
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      filter: invert(100%);
    }
    
    ul.dashed {
    list-style-type: none;
     }
    ul.dashed > li {
     text-indent: -5px;
    }
    ul.dashed > li:before {
    content: "-";
    text-indent: -5px;
    }
  </style>
</head>
<body>
  <header class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <img src="https://seeklogo.com/images/S/sinestro-corp-yellow-lantern-logo-F00ED7157E-seeklogo.com.png" alt="Company Logo" class="img-fluid d-none d-lg-block m-2" style="max-height: 30px;">
    <a class="navbar-brand text-light p-2" href="#"> CompanyName </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end p-2" id="navbarText">
      <ul class="navbar-nav mr-end">
        <li class="nav-item m-1">
          <a class="nav-link active text-light" aria-current="page" href="#">Menu1</a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link text-light" href="#">Menu2</a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link text-light" href="#">Menu3</a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link text-light" href="#">Menu4</a>
        </li>
      </ul>
      <div class="m-2">
        <button type="button" class="btn btn-warning px-4 p-0 " data-toggle="modal" data-target="#exampleModal">
          <a class="nav-link my-0" href="#">Login</a>
        </button>
     </div>
   </div> 
  </header>