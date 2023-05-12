# add-child

request: <strong> POST </strong>

<strong>
   <a>http://localhost:8000/api/register</a>
</strong>

<strong> Request body </strong>

<pre>
<code>
{
  fname: userInput,
  lname: userInput,
  date: userInput,          // must be date/month/day like 2022/01/01
  gender: userInput,        // male of female
  ethnicity: userInput, // Middle Eastern, White European, Hispanic, Black, Asian, South Asian, Native Indian, Others
  Jaundice: userInput, // yes or no
  withASD: userInput, // mean that is there any family with autism (yes, no)
}
</code>
</pre>

<strong> Need [ Autherization header ]  </strong>

### Response 


#### if successful operation
<pre>
<code>
{
    "message": "Child Added Successfully"
}
</code>
</pre>

### if unsuccessful operation
<pre>
<code>
{
  'message': 'Something Wrong !!'
}
</code>
</pre>

<hr/>
