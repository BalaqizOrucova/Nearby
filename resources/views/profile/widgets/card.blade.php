<div class="user-card">
    <div class="cover @if(!$user->getCover()){{ 'no-cover' }}@endif" style="background-image: url('{{ $user->getCover() }}')"></div>
    <div class="detail">
        <div class="image">
            <a data-fancybox="group" href="{{ $user->getPhoto() }}">
                <img style = "width:70px;height:70px" class="img-circle @if($user->sex == 1){{ 'female' }}@endif" src="{{ $user->getPhoto() }}" alt="" />
            </a>
        </div>
        <div class="info">
            <a href="{{ url('/'.$user->username) }}" class="name">{{ $user->name }}</a>
            <a href="{{ url('/'.$user->username) }}" class="username">{{ '@'.$user->username }}</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>