<header class="mb-4">
            <nav class="navbar mavbar-expand-sm navbar-dark bg-dark">
                
                <a class="navbar-brand" href="/">TASKLIST</a>
                
                <button class type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        @if (Auth::check())
                            {{-- 新規タスクの登録 --}}
                            <li class='nav-item'>{!! link_to_route('tasks.create', '新規タスクの登録', [], ['class' => 'nav-link']) !!}</li>
                            {{--ログアウトのリンク --}}
                            <li class="nav-item">{!! link_to_route('logout.get', 'Logout')!!}</li>
                            
                        @else
                            {{-- ユーザ登録ページのリンク --}}
                            <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                            {{-- ログインページのリンク --}}
                            <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                        @endif
                    </ul>
                </div> 
            </nav>
        </header>