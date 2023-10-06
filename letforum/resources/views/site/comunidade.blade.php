@extends('common.mdb-pagewithmenu')

@include('parts.public-navbar')

@section('content')


<style type="text/css">
body{

    color: #1a202c;
    background-color: #e2e8f0;    
}
.inner-wrapper {
    position: relative;
    height: calc(100vh - 3.5rem);
    transition: transform 0.3s;
}
@media (min-width: 992px) {
    .sticky-navbar .inner-wrapper {
        height: calc(100vh - 3.5rem - 48px);
    }
}

.inner-main,
.inner-sidebar {
    position: absolute;
    top: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
}
.inner-sidebar {
    left: 0;
    width: 235px;
    border-right: 1px solid #cbd5e0;
    background-color: #fff;
    z-index: 1;
}
.inner-main {
    right: 0;
    left: 235px;
}
.inner-main-footer,
.inner-main-header,
.inner-sidebar-footer,
.inner-sidebar-header {
    height: 3.5rem;
    border-bottom: 1px solid #cbd5e0;
    display: flex;
    align-items: center;
    padding: 0 1rem;
    flex-shrink: 0;
}
.inner-main-body,
.inner-sidebar-body {
    padding: 1rem;
    overflow-y: auto;
    position: relative;
    flex: 1 1 auto;
}
.inner-main-body .sticky-top,
.inner-sidebar-body .sticky-top {
    z-index: 999;
}
.inner-main-footer,
.inner-main-header {
    background-color: #fff;
}
.inner-main-footer,
.inner-sidebar-footer {
    border-top: 1px solid #cbd5e0;
    border-bottom: 0;
    height: auto;
    min-height: 3.5rem;
}
@media (max-width: 767.98px) {
    .inner-sidebar {
        left: -235px;
    }
    .inner-main {
        left: 0;
    }
    .inner-expand .main-body {
        overflow: hidden;
    }
    .inner-expand .inner-wrapper {
        transform: translate3d(235px, 0, 0);
    }
}

.nav .show>.nav-link.nav-link-faded, .nav-link.nav-link-faded.active, .nav-link.nav-link-faded:active, .nav-pills .nav-link.nav-link-faded.active, .navbar-nav .show>.nav-link.nav-link-faded {
    color: #3367b5;
    background-color: #c9d8f0;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #467bcb;
}
.nav-link.has-icon {
    display: flex;
    align-items: center;
}
.nav-link.active {
    color: #467bcb;
}
.nav-pills .nav-link {
    border-radius: .25rem;
}
.nav-link {
    color: #4a5568;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
<div class="container ">
<div class="main-body p-2 mt-3">
<div class="inner-wrapper">

<div class="inner-sidebar">

<div class="inner-sidebar-header justify-content-center mt-2">
<button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
<line x1="12" y1="5" x2="12" y2="19"></line>
<line x1="5" y1="12" x2="19" y2="12"></line>
</svg>
Novo post
</button>
</div>


<div class="inner-sidebar-body p-0">
<div class="p-3 h-100" data-simplebar="init">
<div class="simplebar-wrapper" style="margin: -16px;">
<div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
<div class="simplebar-mask">
<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
<div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
<div class="simplebar-content" style="padding: 16px;">
<nav class="nav nav-pills nav-gap-y-1 flex-column">
<a href="javascript:void(0)" class="nav-link nav-link-faded has-icon active">Todas publicações</a>
<a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Tendências da semana</a>
<a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Mais populares</a>
<a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Salvos</a>
<a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Rascunhos</a>
<a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Não publicados</a>
</nav>
</div>
</div>
</div>
</div>
<div class="simplebar-placeholder" style="width: 234px; height: 292px;"></div>
</div>
<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
<div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 151px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div>
</div>
</div>

</div>


<div class="inner-main">

<div class="inner-main-header">
<a class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#" data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
<select class="custom-select custom-select-sm w-auto mr-1">
<option selected>Ordernar</option>
<option value="1">Popular</option>
<option value="3">Salvos</option>
<option value="3">Não salvos</option>
<option value="3">Não publicados</option>
</select>
<span class="input-icon input-icon-sm ml-auto w-auto">
<input type="text" class="form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4" placeholder="Buscar" />
</span>
</div>



<div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
<div class="card mb-2">
<div class="card-body p-2 p-sm-3">
<div class="media forum-item">
<a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" class="mr-3 rounded-circle" width="50" alt="User" /></a>
<div class="media-body">
<h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Como aprendo programação?</a></h6>
<p class="text-secondary">
Estou com muitas dificuldades para iniciar na area da tecnologia!
</p>
<p class="text-muted"><a href="javascript:void(0)">user</a> publicado <span class="text-secondary font-weight-bold">20 horas atrás</span></p>
</div>
<div class="text-muted small text-center align-self-center">

</div>
</div>
</div>
</div>

<ul class="pagination pagination-sm pagination-circle justify-content-center mb-0">
<li class="page-item disabled">
<span class="page-link has-icon"><i class="material-icons">chevron_left</i></span>
</li>
<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>

<li class="page-item">
<a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">chevron_right</i></a>
</li>
</ul>
</div>


<div class="inner-main-body p-2 p-sm-3 collapse forum-content">
<a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Back</a>
<div class="card mb-2">
<div class="card-body">
<div class="media forum-item">
<a href="javascript:void(0)" class="card-link">
<img src="https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" class="rounded-circle" width="50" alt="User" />
<small class="d-block text-center text-muted">Name User</small>
</a>
<div class="media-body ml-3">
<a href="javascript:void(0)" class="text-secondary">Name User</a>
<small class="text-muted ml-2">1 hora atrás</small>
<h5 class="mt-1">Titulo do Post</h5>
<div class="mt-3 font-size-sm">
<p>Hello World :)</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
</p>
<p>Fim</p>
</div>
</div>
<div class="text-muted small text-center">

</div>
</div>
</div>
</div>

</div>
</div>


</div>

</div>

<div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<form>
<div class="modal-header d-flex align-items-center bg-primary text-white">
<h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="form-group">
<label for="threadTitle">Title</label>
<input type="text" class="form-control" id="threadTitle" placeholder="Enter title" autofocus />
</div>
<textarea class="form-control summernote" style="display: none;"></textarea>
<div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
<input type="file" class="custom-file-input" id="customFile" multiple />
<label class="custom-file-label" for="customFile">Attachment</label>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-primary">Post</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

@include('parts.public-footer')

@endsection