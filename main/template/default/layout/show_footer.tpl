{% if show_footer == true %}
    </div>
    </div>
    {% include template ~ "/layout/page_footer.tpl" %}
{% else %}
    {% include template ~ '/layout/footer.js.tpl' %}
{% endif %}
    </div>
</body>
</html>