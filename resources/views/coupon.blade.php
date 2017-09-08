<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src='../../public/js/vue.min.js'> </script>
<script src="https://cdn.bootcss.com/jquery/1.8.0/jquery-1.8.0.js"></script>
<script type="text/javascript" src='../../public/laydate/laydate.js'></script> 
<script type="text/javascript" src='../../public/js/layer/layer.js'></script> 

<style type="text/css">
	html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,p {
 margin: 0;
 padding: 0;
 border: 0;
 outline: 0;
 font-size: 100%;
 vertical-align: baseline;
 background: transparent;
}

input { width: 60%;height: 20px;font-size: 18px}
.params-list {list-style-type:none;margin:auto;font-size: 18px;height: 25px;width: 80%}
label {width: 30%;display: inline-block;}
.header-back{height:40px;font-size: 15px;color:#858585;text-align: center;}
</style>
	<title></title>
</head>
<body style="background-color:#E8E8E8">
	<div id='coupon'>
		<div class='header-back'>
			<span></span>
		</div>	
		<div style="padding: 10px;">
			<div style="margin:auto;border:5px solid #E5E5E5 ;border-color:white;height: 100px ;width: 400px;border-radius: 15px;">
				<div style="height: 100%;width: 3%;background-color: #FFC125;float:left;">
				</div>
				<div style="height: 100%;background-color:green;width: 70%;float: left;">
					<div style="height: 50%;background-color: white" >
						 <div style="float:left;width:20%;background-color: white;height: 100%">
						 	<img  width="90%" height="90%" style="border-radius: 90px;" v-bind:src="logo_url">
						 </div>
						 <ul style="float:left;width:80%;background-color: white;height: 100%;list-style-type: none;">
						 	<li class='title' style="text-decoration: none;height: 50%;line-height: 40px;font-size: 10px; ">
						 		<< logo_title>>
						 	</li>
						 	<li style="text-decoration: none; text-overflow:ellipsis;white-space:nowrap;overflow:hidden;font-size: 15px;height: 50%">
						 		<< coupon_title>>            
						 	</li>
						 </ul>
					</div>
					<div style="height: 50%;background-color: white">
						<div style="float: left;width: 15%;line-height: 47px;text-align: center;"> 
							<img width="50%" height="50%"  src="../../public/img/clock.png">
						</div>
						<span style='font-size:15px;line-height: 34px;color:#707070'>2天后过期</span>
					</div>
				</div>
				<div style="background-color:white;border-left:2px dashed black;height: 100%;float:left;width: 26%;text-align: center;line-height: 105px" >
					<span class='discount-content' id='coupon-item' style="font-size: 40px"><< show_content>></span>
					<span style="font-size: 20px"><< discount_unit>></span>
				</div>
			</div>
		</div>
		<div class='header-back'>
		<span></span>
		</div>
	<div style="margin:auto;height:250px;width: 400px;background-color: white;border-radius: 30px;border-color:black">
		<div style="float: left;width: 15%;height: 25%;background-color: white">
			<img  width="90%" height="90%" style="border-radius: 100%;" v-bind:src="logo_url">
		</div>
		<div style="float: left;width: 85%;height: 25%;background-color: white">
			<div style="height: 50%;width: 100%;font-size: 10px;line-height: 40px">
				<< logo_title>>
			</div>
			<div style="height: 50%;width: 100%;font-size: 15px;line-height: 15px">
				<< coupon_title>>   
			</div>
		</div>
		<div style="width:100%;height: 25%;background-color: white;text-align:center;clear: both;">
			<span class='discount-content' style="font-size: 50px"><< show_content>></span>
			<span style="font-size: 25px"><< discount_unit>></span>
		</div>
		<div style="width:100%;height: 25%;background-color: white;text-align:center;line-height: 100px">
			<span style="font-size: 10px;color:#858585">有效期至2017-09-09 23:59:59</span>
		</div>
		<div style="width:100%;height: 25%;background-color: white;text-align:center;line-height: 184px;">
			<div style="background-color: green;width: 90%;height:60%;margin:auto;border-radius: 30px;line-height: 43px">
				<span style="font-size: 20px;color: white;text-align: center;">去使用</span>
			</div>
		</div>
	</div>

<div class='header-back'>
		<span></span>
</div>
			<!-- <div style="height: 300px;width: 400px;border:1px solid black;margin: auto">
			<h4 style="color:#303030;margin-left: 20px;margin-top: 35px;margin-bottom: 20px;"><< coupon_detail.name>></h4>	
			<p v-html='coupon_detail.value' style="margin: 10px 40px">
			</p>	
		</div> -->
	<div>
<div class='header-back'>
		<span></span>
</div>
	<ul >
		<li class="params-list">
		   	<label>优惠券url</label>
		   	<input v-model='logo_url' type="" name="">	
		</li>
		<li class="params-list">
		   	<label>优惠券旁边标题</label> 
		   	<input v-model='logo_title' type="" name="">	
		</li>
		<li class="params-list">
		   	<label>优惠券名称</label> 
		   	<input v-model='coupon_title' type="" name="">	
		</li>
		<li class="params-list">
		   	<label>优惠券打折数量</label>
		   	<input @change='change_content()' v-model='discount_content' type="" name="">	
		</li>
		<li class="params-list">
		   	<label>模板类型</label>
		   	<input @change='change_tmp()' v-model='template_type' type="" name="">	
		</li class="params-list">
		<li class="params-list">
		   	<label>开始时间</label>
		   	<input id='start-time' type='text'/>
		</li >
		<li class="params-list">
		   	<label>结束时间</label>
		   	<input id='end-time' type='text'/>
		</li >
		<li class="params-list">
		   	<label>优惠券详情标题</label>
		   	<input v-model='coupon_detail.name' type="" name="">	
		</li >
		<li class="params-list">
		   	<label style="margin-top: 10px;">优惠券详情内容</label>
		   	<textarea v-model='coupon_detail.value' rows="7" cols='42' style="font-size: 15px margin-bottom:80px;"> </textarea> 
		</li >
	</ul>
</div>
	<div >
		<div style="margin:auto;margin-top: 110px;border:1px black solid;border-radius: 5px ;width:400px;height: 350px;">
			<h4 style="color:#303030;margin-left: 20px;margin-top: 35px;margin-bottom: 20px;"><< coupon_detail.name>></h4>	
			<p v-html='coupon_detail.value' style="margin: 10px 40px">
		</div>	
	</div>
<div class='header-back'>
		<span></span>
</div>
	<div style="margin: auto;margin-top:5px;height: 35px;width: 150px;border:black 1px solid;border-radius: 10px;background-color: black;font-size: 28px;color: white;line-height: 35px;text-align: center;">
		<span @click='submit()' style="cursor: pointer">创建模板</span>
	</div>
	<div style="margin-left:15%;">
	<h3>使用注意：</h3>
		模板类型1 
		<p>
			1-抵扣券，对应抵扣金额（单位分）;
		</p>
		<p>2-折扣券，对应折扣比例（1~99）;</p>
		<p>
			3-文字券，如”梅菜扣肉“
		</p>
	</div>
</div>
<div class='header-back'>
		<span></span>
</div>
	
</body>
<script type="text/javascript">
	laydate.render({
	  elem: '#start-time',
	  
	}); 
	laydate.render({
	  elem: '#end-time',
	}); 


	var vue=new Vue({
		el:'#coupon',
		delimiters: ['<<', '>>'],
		data:{
			logo_url:'https://gss0.baidu.com/94o3dSag_xI4khGko9WTAnF6hhy/map/pic/item/242dd42a2834349be21d314bc0ea15ce37d3bee1.jpg',
			logo_title:'百度地图',
			coupon_title:'测试名称',
			discount_content:1,
			discount_unit:'',
			template_type:1,
			start_time:'',
			end_time:'',
			coupon_detail:{
				name:'优惠详情',
				value:'1、在【测试】APP首页选择【换轮胎】，进入购买页面填写核实相关信息选择轮胎产品，勾选优惠券下单支付，即可享受优惠；<br/>2、本券适用于武汉、杭州【途虎养车】门店，具体门店信息以【途虎养车】平台内为准；<br/>3、使用同一手机号码、支付账号、设备终端、银行卡等，或经途虎排查认定多个账户实际控制人为同一人的，视为同一账户；为保障其他用户权益，<br/>',
			},
			show_content:'',


		},
		methods:{
			init:function(){
				var this_obj=this;
				if(this_obj.template_type==1){
					this_obj.change_tmp(1);
				}
			},
			change_content:function(){
				var this_obj=this;
					this_obj.change_tmp();
			},
			change_tmp:function(){
				var this_obj=this;
				num=this_obj.template_type
				if(num==1){
					this_obj.show_content=parseInt(this_obj.discount_content)/100;
					this_obj.discount_unit='元';
				}else if(num==2){
					if(this_obj.discount_content<1||this_obj.discount_content>99){
						this_obj.discount_content=1;
					}
					this_obj.show_content=parseInt(this_obj.discount_content)/10;
					this_obj.discount_unit='折';
				}else if(num==3){
					this_obj.show_content=this_obj.discount_content;
					this_obj.discount_unit='';
					$(function(){
						
						$('.discount-content').css('font-size','30px');
						$('#coupon-item').css('font-size','20px');

					});
				}

			},
			submit:function(){
				var this_obj=this;
				var start_time='';
				var end_time='';

				if(!this_obj.logo_url){
					layer.alert('请填写logo的图片地址');
					return false;
				}
				if(!this_obj.logo_title){
					layer.alert('请填写logo的旁边标题');
					return false;
				}
				if(!this_obj.coupon_title){
					layer.alert('请填写优惠券名称');
					return false;
				}
				if(!this_obj.discount_content){
					layer.alert('请填写优惠券内容');
					return false;
				}
				if(!this_obj.template_type){
					layer.alert('请填写优惠券模板类型');
					return false;
				}
				start_time=$('#start-time').val();
				end_time=$('#end-time').val();
				if(start_time==''){
					layer.alert('请填写开始时间');
					return false;
				}
				if(end_time==''){
					layer.alert('请填写结束时间');
					return false;
				}
				start_timestamp=new Date(start_time).getTime();
				end_timestamp=new Date(end_time).getTime();
				start_timestamp=start_timestamp/1000-28800;
				end_timestamp=end_timestamp/1000-28800;
				if(!this_obj.coupon_detail.name){
					layer.alert('请填写优惠券详情标题');
					return false;
				}
				if(!this_obj.coupon_detail.value){
					layer.alert('请填写优惠券详情内容');
					return false;
				}
				var url='10.99.110.223:8889';
				$.ajax({
					type:'ajax',
					url:url,
					data:data,
					success:function(){

					},
					error:function(){

					}
				})


			}

		}
	})
	vue.init();
</script>
</html>