{% extends template ~ "/layout/page.tpl" %}

{% block body %}
    {% if plugin_main_top %}
    <div id="plugin_main_top" class="col-md-12">
        {{ plugin_main_top }}
    </div>
    {% endif %}

    {% if plugin_menu_top %}
        <div id="plugin_menu_top">
            {{plugin_menu_top}}
        </div>
    {% endif %}
    
    {% if _u.logged == 0 %}
	<div class="col-md-3 menu-column">    
        {% include template ~ "/layout/login_form.tpl" %}
    </div>
    {% endif %}

	<div class="{% if _u.logged == 1 %}col-md-12 {%else%} col-md-9 {% endif %}">
        {% if plugin_content_top %}
            <div id="plugin_content_top">
                {{ plugin_content_top }}
            </div>
        {% endif %}
        {% if home_page_block %}
            <section id="homepage-home">
                {{ home_page_block }}
            </section>
        {% endif %}
        
        {{ sniff_notification }}
        
        {% block page_body %}
            {% include template ~ "/layout/page_body.tpl" %}
        {% endblock %}
        
        {% if welcome_to_course_block %}
            <section id="homepage-course">
            {{ welcome_to_course_block }}
            </section>
        {% endif %}

        {% block content %}
        {% if content is not null %}
            <section id="page-content" class="{{ course_history_page }}">
                {{ content }}
            </section>
        {% endif %}
        {% endblock %}

        {% if announcements_block %}
            <section id="homepage-announcements">
            {{ announcements_block }}
            </section>
        {% endif %}

        {% if course_category_block %}
            <section id="homepage-course-category">
                {{ course_category_block }}
            </section>
        {% endif %}

	{% include template ~ "/layout/hot_courses.tpl" %}

    {% if plugin_content_bottom %}
        <div id="plugin_content_bottom">
            {{plugin_content_bottom}}
        </div>
    {% endif %}
</div>
{% if plugin_main_bottom %}
    <div id="plugin_main_bottom" class="col-md-12">
        {{ plugin_main_bottom }}
    </div>
{% endif %}
{% endblock %}
