## Instalacja
<ol>
<li>utworzenie bazy danych "animals" - ew. zmiana w pliku .env</li>
<li> wykonanie poleceń:
<ul>
<li>php artisan migrate</li>
<li>php artisan seed</li>
</ul>
wygeneruje strukturę bazy danych oraz wypełni danymi:
<ul>
<li>oddziały z id od 1 do 10</li>
<li>koty z id od 1 do 150</li>
<li>pracowników z id od 1 do 10</li>
</ul>
</li>
<li>php artisan optimize - odświeżenie aplikacji</li>
</ol>
Aplikacja jest gotowa do działania.

## Użycie
<p>Routing: </p>
<table>
<tr><td>GET|HEAD</td><td>api/cats</td><td>CatController@index</td></tr>
<tr><td>  POST    </td><td>api/cats</td><td>CatController@store</td></tr>
<tr><td>  GET|HEAD</td><td>api/cats/{cat}</td><td>CatController@show</td></tr>
<tr><td>  PUT     </td><td>api/cats/{cat}</td><td>CatController@update</td></tr>
<tr><td>  DELETE  </td><td>api/cats/{cat} </td><td>CatController@delete</td></tr>
<tr><td>  GET|HEAD</td><td>api/employees</td><td>EmployeeController@index</td></tr>
 <tr><td> POST    </td><td>api/employees</td><td>EmployeeController@store</td></tr>
 <tr><td> GET|HEAD</td><td>api/employees/{employee_id}/office </td><td>EmployeeController@showOffice</td></tr>
 <tr><td> GET|HEAD</td><td>api/employees/{employee}</td><td>EmployeeController@show</td></tr>
 <tr><td> PUT     </td><td>api/employees/{employee}</td><td>EmployeeController@update</td></tr>
 <tr><td> DELETE  </td><td>api/employees/{employee}</td><td>EmployeeController@delete</td></tr>
<tr><td>  GET|HEAD</td><td>api/offices</td><td>OfficeController@index</td></tr>
<tr><td>  POST    </td><td>api/offices</td><td>OfficeController@store</td></tr>
<tr><td>  GET|HEAD</td><td>api/offices/{office}</td><td>OfficeController@show</td></tr>
<tr><td>  PUT     </td><td>api/offices/{office} </td><td>OfficeController@update</td></tr>
 <tr><td> DELETE  </td><td>api/offices/{office} </td><td>OfficeController@delete</td></tr>
<tr><td>  GET|HEAD</td><td>api/offices/{office}/cats</td><td>OfficeController@showCats</td></tr>
 <tr><td> GET|HEAD</td><td>api/offices/{office}/employees</td></tr>

</table>
Gdzie wartość w nawiasach klamrowych to id wygenerowane na początku

