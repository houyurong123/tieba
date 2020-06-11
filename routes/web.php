<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
	/   根  你域名所指定为的位置就是根
*/
Route::get('/', function () {
    //return view('welcome');
    //echo "这就是你的laravel";
    //获取配置文件信息
   //echo Config::get("database.default");

	//设置配置文件中的信息
	/*
		如果是在config里边改的配置文件,作用于整个项目
		在当前代码中设置的配置文件,紧紧作用于当前文件
	*/
	Config::set("app.timezone","UTC");
	//echo Config::get("app.timezone");

	//如果获取.env中的配置信息
	echo env('DB_HOST');

});

/*
Route::get(路由规则,方法(){
	
});
*/


//最普通的路由
Route::get("/info",function(){
	echo "我是info路由";
	//return view('welcome');
});

//定义一个带参数的路由
//id  一般是 数字

/*
Route::get("/goods/index{id}.html",function($id){
	echo "您的商品id是".$id;
});


*/

//限制参数的类型

/*
Route::get("/goods/{id}",function($id){
	echo "您的商品id是".$id;
})->where('要限制的参数','正则');
*/
/*
Route::get("/goods/{id}",function($id){
	echo "您的商品id是".$id;
})->where("id",'\d{5}');

*/
//传递多个参数
/*
Route::get("goods/{id}/{gname}",function($id,$gname){
	echo "商品id是:".$id;
	echo "商品名称:".$gname;
})->where("id",'\d+')->where("name",'\w{3}');



*/


/*
	如果我们将来用到了中间件(过滤)
	过滤一批路由,我们可以将一组的路由
	放到路由组里,在里有组里设置中间件规则
	[中间件]  -->  没有登录不让访问
	session['username']没有值
*/


//定义一个路由组 
	/*
Route::group([],function(){
	//普通路由  后台的用户
	Route::get('/user',function(){
		echo "后台的用户管理";
	});

	Route::get('/type',function(){
		echo "后台的类别管理";
	});
});
*/
//路由别名
/*
Route::get("/home/person",['as'=>'person',function(){
	echo "这是前台的个人中心页面";
}]);

*/
//普通路由
/*
Route::get("/a",function(){
	echo route('person');
});
*/
//键的位置必须是as  
Route::get("/a/b/c",['as'=>'name',function(){
	echo "这是路由";
}]);

Route::get("/act",function(){
	echo route('name');
});






