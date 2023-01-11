<div class="sidebar-wrapper">
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-mini">
            {{ setting('site_title') }}
        </a>
        <a href="{{ route('home') }}" class="simple-text logo-normal">
            <img src="{{ setting('logo')?asset('storage/logo/'.setting('logo')):'' }}" alt="" width="120" height="20">
        </a>
    </div>
    <div class="user">
        <div class="photo">
            <img src="{{get_user()->image?asset('storage/user/'.get_user()->image):'backend/assets/img/default-avatar.png'}}" />
        </div>
        <div class="info ">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                <span>{{ get_user()->name }}
                    <b class="caret"></b>
                </span>
            </a>
            <div class="collapse" id="collapseExample">
                <ul class="nav">
                    <li>
                        <a class="profile-dropdown" href="{{ route('admin.profile') }}">
                            <span class="sidebar-mini"> <i class="nc-icon nc-single-02"></i></span>
                            <span class="sidebar-normal">{{ _lang('My Profile') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="profile-dropdown" href="{{ route('admin.password') }}">
                            <span class="sidebar-mini"><i class="nc-icon nc-single-02"></i></span>
                            <span class="sidebar-normal">{{ _lang('Password') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="profile-dropdown" href="{{ route('admin.user_log') }}">
                           <span class="sidebar-mini"> <i class="nc-icon nc-settings-90"></i></span>
                            <span class="sidebar-normal">{{ _lang('Logs') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="nc-icon nc-chart-pie-35"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                <i class="nc-icon nc-app"></i>
                <p>
                    {{ _lang('ACL') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse " id="componentsExamples">
                <ul class="nav">
                    <li class="nav-item {{ Request::is('admin/user/role*') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.user.role.index') }}">
                            <span class="sidebar-mini">R</span>
                            <span class="sidebar-normal">{{ _lang('Role') }}</span>
                        </a>
                    </li>

                     <li class="nav-item {{ Request::is('admin/user/user-manage*') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.user.user-manage.index') }}">
                            <span class="sidebar-mini">U</span>
                            <span class="sidebar-normal">{{ _lang('User') }}</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is('admin/word*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('admin.word.index') }}">
                <i class="nc-icon nc-align-left-2"></i>
                <p>Word</p>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/mowja*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('admin.mowja.index') }}">
                <i class="nc-icon nc-app"></i>
                <p>Mowja</p>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/village*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('admin.village.index') }}">
                <i class="nc-icon nc-attach-87"></i>
                <p>Village</p>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/input*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('admin.input.create') }}">
                <i class="nc-icon nc-bullet-list-67"></i>
                <p>Input</p>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/data*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('admin.data.create') }}">
                <i class="nc-icon nc-bullet-list-67"></i>
                <p>Show</p>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/setting*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('admin.setting') }}">
                <i class="nc-icon nc-settings-gear-64"></i>
                <p>Setting</p>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/language*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('admin.language') }}">
                <i class="fa fa-language"></i>
                <p>Language</p>
            </a>
        </li>

    </ul>
</div>