You must take care of the following for register 
 <ol>
  <li> email</li>
  <li> password</li>
  <li> Password must be at least 8 characters</li>
 </ol>
 
 

request: <strong> POST </strong>

<strong>
   <a>/api/login</a>
</strong>

<strong> Request body </strong>

<pre>
<code>
{

  email: userInput,
  password: userInput,
}
</code>
</pre>

<strong> Does not need [ Autherization header ]  </strong>

### Response 

#### if LoggedIn successfully
<pre>
<code>
{
    "message": "logged In successfully",
    "token": "6|JKm6YR3agHALXPQvA5B5SSNpmpBGJe2tPnu3lfm3",
}
</code>
</pre>



#### You must store the token in your shared preferences along with Bearer Token
#### like that
<code>
  Bearer 6|JKm6YR3agHALXPQvA5B5SSNpmpBGJe2tPnu3lfm3
</code>

to use it later for in autherization header

#### if unsuccessful operation
<pre>
<code>
{
    "error": "wrong email or password"
}
</code>
</pre>


<hr/>

