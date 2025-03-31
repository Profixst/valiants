{% if selectedValiant.valiant %}

    {% set valiant = selectedValiant.valiant %}
    <div class="sidebar_custom_box ambassador">
        <div class="sidebar_custom__row">
            <div class="sidebar_custom__col">
                <div class="ambassador__image background"
                     style="background-image: url('{{ valiant.avatar.path|resize(300, 300) }}')">
                </div>
            </div>
            <div class="sidebar_custom__col ambassador__info">
                <div class="sidebar_custom__headline">
                    <h3 class="sidebar_custom__title">
                        {{ valiant.last_name }} {{ valiant.first_name }}
                    </h3>
                    <p>{{ valiant.position }}</p>
                </div>
                <ul class="ambassador__list">

                    <li class="sidebar_custom__list_item">
                        <a href="{{ valiant.url }}" class="sidebar_custom__link">{{ selectedValiant.linkTitle }}</a>
                    </li>

                    {% for link in valiant.links %}

                        <li class="sidebar_custom__list_item">
                            <a href="{{ link.url|url }}" class="sidebar_custom__link" {{ link.new_window ? 'target="_blank"' }}>
                                {{ link.title }}
                            </a>
                        </li>

                    {% endfor %}

                </ul>
            </div>
        </div>
    </div>

{% endif %}