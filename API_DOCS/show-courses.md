## show-courses

request: <strong> GET </strong>


<strong>
   http://127.0.0.1:8000/api/show-courses
</strong>

<strong> No Request body </strong>


<strong> Must provide [ <code>Autherization header</code> (secret token) ] like that <code>Bearer 13|P6VvMvJmWQ05wgyic6zXux42deaqL5nzJtVnOCB3</code> </strong>

### Response 
#### if successful operation
<pre>
<code>
[
    {
        "id": 1,
        "courseTitleEn": "Autism and communication",
        "courseTitleAr": "التوحد و التواصل",
        "courseDescriptionEn": "Explore how to recognise communication differences for autistic people and what factors impact upon successful communication.",
        "courseDescriptionAr": "اكتشف كيفية التعرف على اختلافات الاتصال للأشخاص المصابين بالتوحد والعوامل التي تؤثر على التواصل الناجح.",
        "courseImage": "https://mycollaborativeteam.com/wp-content/uploads/2021/01/56717292-children-with-autism-wants-to-communicate-but-they-find-it-difficult-illustration-.jpg"
    }
]
</code>
</pre>
