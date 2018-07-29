    <?php/*|--------------------------------------------------------------------------| Web Routes|--------------------------------------------------------------------------|| Here is where you can register web routes for your application. These| routes are loaded by the RouteServiceProvider within a group which| contains the "web" middleware group. Now create something great!|*///管理员理由Route::prefix('admin')->namespace('Admin')->group(function () {    Route::get('', 'HomeController@index')->name('admin');    Route::post('', 'HomeController@index');    Route::get('login', 'LoginController@index')->name('admin.login');    Route::post('login', 'LoginController@store');    Route::post('logout', 'LogoutController@logout')->name('admin.logout');    Route::get('register', 'RegisterController@index')->name('register');    Route::post('register', 'RegisterController@store');    Route::get('user/{id}/detail','HomeController@query')->name('user.detail'); //查看用户详细信息//    Route::get('user/{id}/detail', 'HomeController@query')->name('trunk.submit');    Route::get('user/{id}/detail/{scores}', 'HomeController@detail')->name('user.detail.scores');});//用户路由Route::prefix('')->namespace('User')->group(function () {    Route::get('', 'HomeController@index')->name('user');    Route::get('login.html', 'LoginController@index');    Route::post('login.html', 'LoginController@store')->name('login');    Route::post('logout', 'LogoutController@logout')->name('logout');});//问题理由Route::prefix('user/question')->namespace('Question')->group(function () {    Route::get('trunk.html', 'TrunkDiseaseController@show')->name('trunk');    Route::get('torso.html', 'TorsoFunctionController@show')->name('torso');    Route::get('cognitive.html', 'CognitiveAbilityController@show')->name('cognitive');    Route::get('fall.html', 'FallRiskController@show')->name('fall');    Route::get('nutrition.html', 'NutritionController@show')->name('nutrition');    Route::get('psycho.html', 'PsychoSpiritController@show')->name('psycho');    Route::post('trunk.html', 'ScoreController@store')->name('trunk.submit');    Route::post('torso.html', 'ScoreController@store')->name('torso.submit');    Route::post('cognitive.html', 'ScoreController@store')->name('fall.submit');    Route::post('fall.html', 'ScoreController@store')->name('cognitive.submit');    Route::post('nutrition.html', 'ScoreController@store')->name('nutrition.submit');    Route::post('psycho.html', 'ScoreController@store')->name('psycho.submit');});