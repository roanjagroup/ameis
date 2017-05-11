{% if not courses is empty %}
    <div class="row">
    {% for item in courses %}
        <div class="col-md-55">
            <div class="thumbnail">  
                <div class="image view view-first">                      
                    {% if item.thumbnails != '' %}
                        <img class="img-responsive" src="{{ item.thumbnails }}" title="{{ item.title }}" alt="{{ item.title }}"/>
                    {% else %}
                        {{ 'blackboard.png' | img(48, item.title ) }}
                    {% endif %}           
                    <div class="mask">
                        <h5> 
                            <a href="{{ item.link }}">
                                {{ item.title }} {{ item.code_course }}
                            </a>
                        </h5>
                        {% if item.edit_actions != '' %}
                            <div class="tools tools-bottom">
                                {% if item.document == '' %}
                                    <a href="{{ item.edit_actions }}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                {% else %}
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-default btn-sm" href="{{ item.edit_actions }}">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        {{ item.document }}
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class="caption">
                    <h5 class="course-items-title">
                        {% if item.visibility == constant('COURSE_VISIBILITY_CLOSED') %}
                            {{ item.title }} {{ item.code_course }}
                        {% else %}
                            <a href="{{ item.link }}">
                                {{ item.title }} {{ item.code_course }}
                            </a>
                            {{ item.notifications }}
                            {% if item.is_special_course %}
                                {{ 'klipper.png' | img(22, 'CourseAutoRegister'|get_lang ) }}
                            {% endif %}
                        {% endif %}
                    </h5>
                    <div class="course-items-session">
                        <div class="list-teachers">
                            {{ 'teacher.png' | img(16, 'Professor'|get_lang ) }}
                            {% for teacher in item.teachers %}
                                {% set counter = counter + 1 %}
                                {% if counter > 1 %} | {% endif %}
                                <a href="{{ teacher.url }}" class="ajax"
                                   data-title="{{ teacher.firstname }} {{ teacher.lastname }}">
                                    {{ teacher.firstname }} {{ teacher.lastname }}
                                </a>
                            {% endfor %}
                        </div>
                    </div>                 
                </div>                
            </div>
        </div>
    {% endfor %}
    </div>
{% endif %}