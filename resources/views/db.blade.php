{% extends "layout.html" %}

{% block content %}
<p>Got these rows from the database:</p>

<ul>
    {% for n in names %}
    <li> {{ n.name }} </li>
    {% else %}
    <li>Nameless!</li>
    {% endfor %}
</ul>

{% endblock %}