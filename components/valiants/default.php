{% if __SELF__.valiants|length %}
    <ul>
        {% for item in __SELF__.valiants %}
            <li>
                <span>
                    {{ item.fullName() }}
                </span>
                <img src="{{ item.avatar.path }}">
            </li>
        {% endfor %}
    </ul>
{% endif %}