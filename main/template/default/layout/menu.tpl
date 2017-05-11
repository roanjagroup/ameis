{% block topbar %}
   {% include template ~ "/layout/topbar.tpl" %}
{% endblock %}
<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;"> {{ logo }} <a href="{{ _p.web }}" class="site_title"> <span>{{portal_name}}</span></a></div>
    <div class="clearfix"></div>
    
    <!-- menu profile quick info --> 
    {% if _u.logged == 1 %}
    <div class="profile clearfix">
      <div class="profile_pic"> <img src="{{ _u.avatar_medium }}" alt="{{ _u.complete_name }}" class="img-circle profile_img"> </div>
      <div class="profile_info"> <span>Welcome,</span>
        <h2><a href="{{ profile_url }}">{{ _u.complete_name }}</a></h2>
      </div>
    </div>
    {% endif %} 
    <!-- /menu profile quick info --> 
    
    <br />
    {% if plugin_menu_top %}
        <div id="plugin_menu_top">
            {{plugin_menu_top}}
        </div>
    {% endif %}  
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
       		<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  {% for item in menu %}
                  <li class="{{ item.current }}"><a href="{{ item.url }}">{{ item.title }}</a></li>
                  {% endfor %} 
                </ul> 
        	</li>
            {% block sidebar_home %}
                {% include template ~ "/layout/menu_layout_2_col.tpl" %}
            {% endblock %}  
            {% block sidebar_social %}
                {% include template ~ "/layout/menu_layout_3_col.tpl" %}
            {% endblock %}  
             {{ social_menu_block }} 
        </ul>             
      </div>
    </div>
    <!-- /sidebar menu -->     

    {% if plugin_menu_bottom %}
    <div id="plugin_menu_bottom">
        {{ plugin_menu_bottom }}
    </div>
    {% endif %}  
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small"> 
      <a data-toggle="tooltip" data-placement="top" title="Settings"> 
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
      </a> 
      <a data-toggle="tooltip" data-placement="top" title="FullScreen"> 
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> 
      </a> 
      <a data-toggle="tooltip" data-placement="top" title="Lock"> 
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> 
      </a> 
      <a id="logout_button" data-toggle="tooltip" data-placement="top" title="{{ "Logout"|get_lang }}" href="{{ logout_link }}"> 
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span> 
      </a> 
    </div>
    <!-- /menu footer buttons --> 
  </div>
</div>
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
        {% if _u.logged == 1 %}                
            <ul class="nav navbar-nav navbar-right">
                {% if _u.status != 6 %}
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ _u.avatar_small }}" alt="{{ _u.complete_name }}">{{ _u.complete_name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li class="user-header">
                            <div class="text-center">
                            <img class="img-circle" src="{{ _u.avatar_medium }}" alt="{{ _u.complete_name }}" />
                            <p class="name"><a href="{{ profile_url }}">{{ _u.complete_name }}</a></p>
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ _u.email }}</p>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="user-body">
                            <a title="{{ "Inbox"|get_lang }}" href="{{ message_url }}">
                                <em class="fa fa-envelope" aria-hidden="true"></em> {{ "Inbox"|get_lang }}
                            </a>
                            {% if certificate_url %}
                            <a title="{{ "MyCertificates"|get_lang }}" href="{{ certificate_url }}">
                                <em class="fa fa-graduation-cap" aria-hidden="true"></em> {{ "MyCertificates"|get_lang }}
                            </a>
                            {% endif %}

                            <a id="logout_button" title="{{ "Logout"|get_lang }}" href="{{ logout_link }}" >
                                <em class="fa fa-sign-out"></em> {{ "Logout"|get_lang }}
                            </a>
                        </li>
                    </ul>
                </li>
                {% endif %}   
                {% if user_notifications is not null %}
                <li role="presentation">
                    <a class="dropdown-toggle info-number" href="{{ message_url }}">
                    <i class="fa fa-envelope-o"></i>
                    {{ user_notifications }}
                    </a>
                </li>
                {% endif %}
            </ul> 
            {% endif %}   
        </nav>
    </div>
</div>
<!-- /top navigation -->
        