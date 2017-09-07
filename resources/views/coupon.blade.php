<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src='../../public/js/vue.min.js'> </script>
<script src="https://cdn.bootcss.com/jquery/1.8.0/jquery-1.8.0.js"></script>
<script src="../../public/js/dcalendar.picker.js"></script>

<script src="https://unpkg.com/mint-ui/lib/index.js"></script>
<link rel="stylesheet" href="https://unpkg.com/mint-ui/lib/style.css">
 
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

input { width: 600px;height: 50px;font-size: 40px}
.params-list {font-size: 30px;height: 70px;width: 100%}
label {width: 300px }
</style>
	<title></title>
</head>
<body style="background-color:#E8E8E8">
	<div id='coupon'>

		<div style="height:80px;font-size: 55px;color:#858585 ">
			<span><返回</span>
		</div>	
		<div style="padding: 10px;">
			<div style="border:5px solid #E5E5E5 ;border-color:white;height: 250px ;width: 100%;border-radius: 15px;">
				<div style="height: 100%;width: 3%;background-color: #FFC125;float:left;">
				</div>
				<div style="height: 100%;background-color:green;width: 70%;float: left;">
					<div style="height: 50%;background-color: white" >
						 <div style="float:left;width:20%;background-color: white;height: 100%">
						 	<img  width="90%" height="90%" style="border-radius: 90px;" v-bind:src="logo_url">
						 </div>
						 <ul style="float:left;width:80%;background-color: white;height: 100%;list-style-type: none;">
						 	<li class='title' style="text-decoration: none;height: 50%;line-height: 100px;font-size: 25px; ">
						 		<< logo_title>>
						 	</li>
						 	<li style="text-decoration: none; text-overflow:ellipsis;white-space:nowrap;overflow:hidden;font-size: 45px;height: 50%">
						 		<< coupon_title>>            
						 	</li>
						 </ul>
					</div>
					<div style="height: 50%;background-color: white">
						<div style="float: left;width: 15%;line-height: 159px;text-align: center;"> 
							<img width="50%" height="50%"  src="../../public/img/clock.png">
						</div>
						<span style='font-size:30px;line-height: 122px;color:#707070'>2天后过期</span>
					</div>
				</div>
				<div style="background-color:white;border-left:2px dashed black;height: 100%;float:left;width: 26%;text-align: center;line-height: 200px" >
					<span class='discount-content' style="font-size: 80px"><< show_content>></span>
					<span style="font-size: 50px"><< discount_unit>></span>
				</div>
			</div>
		</div>
		<div style="height:80px;font-size: 55px;color:#858585 ">
		<span><返回</span>
	</div>
	<div style="height:550px;width: 100%;background-color: white;border-radius: 30px;border-color:black">
		<div style="float: left;width: 15%;height: 25%;background-color: white">
			<img  width="90%" height="90%" style="border-radius: 100%;" v-bind:src="logo_url">
		</div>
		<div style="float: left;width: 85%;height: 25%;background-color: white">
			<div style="height: 50%;width: 100%;font-size: 25px;line-height: 96px">
				<< logo_title>>
			</div>
			<div style="height: 50%;width: 100%;font-size: 45px;line-height: 40px">
				<< coupon_title>>   
			</div>
		</div>
		<div style="width:100%;height: 25%;background-color: white;text-align:center;clear: both;">
			<span class='discount-content' style="font-size: 100px"><< show_content>></span>
			<span style="font-size: 25px"><< discount_unit>></span>
		</div>
		<div style="width:100%;height: 25%;background-color: white;text-align:center;line-height: 184px">
			<span style="font-size: 25px;color:#858585">有效期至2017-09-09 23:59:59元</span>
		</div>
		<div style="width:100%;height: 25%;background-color: white;text-align:center;line-height: 184px">
			<div style="background-color: green;width: 90%;height:75%;margin:auto;border-radius: 30px;line-height: 100px">
				<span style="font-size: 45px;color: white;text-align: center;">去使用</span>
			</div>
		</div>
	</div>


	<div>
	<ul style="text-align: left;">
		<li class="params-list">
		   	<label>优惠券url</label><input  style="width:400px" v-model='logo_url' type="" name="">	
		</li>
		<li class="params-list">
		   	<label>优惠券旁边标题</label> <input v-model='logo_title' type="" name="">	
		</li>
		<li class="params-list">
		   	<label>优惠券名称</label> <input v-model='coupon_title' type="" name="">	
		</li>
		<li class="params-list">
		   	<label>优惠券打折数量</label><input @change='change_content()' v-model='discount_content' type="" name="">	
		</li class="params-list">
		<li class="params-list">
		   	<label>模板类型</label><input @change='change_tmp()' v-model='template_type' type="" name="">	
		</li class="params-list">
		<li class="params-list">
		   	<!-- <label>开始时间</label><input v-model='start_time' type="time" name="">	 -->
		   
		</li class="params-list">
		<li class="params-list">
		   	<label>结束时间</label><input id='mydatepicker2' type='text'/>

		</li class="params-list">
		<input type="text" id="datepicker">

		<li class="params-list">
		   	<label>优惠券详情标题</label><input v-model='coupon_detail.name' type="" name="">	
		</li class="params-list">
		<li class="params-list">
		   	<label>优惠券详情内容</label><input v-model='coupon_detail.value' type="" name="">	
		</li class="params-list">
	</ul>

<template>
  <mt-datetime-picker
    ref="picker"
    type="time"
    v-model="pickerValue">
  </mt-datetime-picker>
</template>

<!-- <script>
  export default {
    methods: {
      
    }
  };
</script>
<script>
    export default {
        
    }
</script> -->



	<button style="height: 100px;width: 200px;text-align: center;font-size: 80px;border-radius: 30px;">
		确定
	</button>
		
	</div>
	<div style="font-size: 40px">
		<span>
			使用注意：模板类型1 1-抵扣券，对应抵扣金额（单位分）;2-折扣券，对应折扣比例（1~99）;3-文字券，如”梅菜扣肉“
		</span>
	</div>
</div>
	
</body>
<script type="text/javascript">
	$('#mydatepicker2').dcalendarpicker({
		format:'yyyy-mm-dd'
	}); 
	$('#a').click(function(){
		alert($('#mydatepicker2').val());

	})
	import { DatetimePicker } from 'mint-ui';

Vue.component(DatetimePicker.name, DatetimePicker);

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
				name:'',
				value:'',
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
			openPicker() {
        this.$refs.picker.open();
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
						$('.discount-content').css('font-size','60px');
					});
				}

			}

		}
	})
	vue.init();
</script>
</html>