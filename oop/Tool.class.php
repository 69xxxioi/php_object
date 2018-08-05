<?php
	
	//辅助工具，里面存放的都是静态党阀，直接调用，无需实例化
	final class Tool {

		//注册成功以后，弹出一个信息，然后跳转到指定的页面
		static public function _alertLocation($_info,$_url) {
			echo "<script type=\"text/javascript\">alert('$_info');location.href='$_url';</script>";
			exit();
		}

		//登录失败以后，弹窗返回到之前的页面
		static public function _alertBack($_info) {
			echo "<script type=\"text/javascript\">alert('$_info');history.back();</script>";
			exit();
		}
	}



?>