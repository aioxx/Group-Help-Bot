<?php
ob_start();
flush();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
ini_set("log_errors" , "off");
header('Content-Type: application/json; charset=utf-8');
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
$API_KEY = "5441227528:AAFmqx3pTfhdjkOebDz0Kt_NLgtFgyQvgXZtYBVw";
$tokens = "5441227528:AAFmqx3pTOdjdhebDz0Kt_NLgtFgyQvgXZtYBVw";
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
define("API_KEY",$API_KEY);
function bot($method, $datas=[]){
$Saied_Botate = "https://api.telegram.org/bot".API_KEY."/".$method;
$saied_botate = null;
if(!empty($datas)){
$boundary = uniqid();
$saied_botate = buildMultipartData($datas,$boundary);
$Saied = ['http'=>[
'header'=>"Content-Type: multipart/form-data; boundary=$boundary\r\n",
'method'=>'POST',
'content'=>$saied_botate,
],];
}
if($saied_botate !== null){
$saied = stream_context_create($Saied);
$saied_result = file_get_contents($Saied_Botate, false, $saied);
}else{
$saied_result = file_get_contents($Saied_Botate);
}
if($saied_result === false){
return "Error: ".error_get_last()['message'];
}else{
return json_decode($saied_result);
}
}
function buildMultipartData($data,$boundary){
$SaiedData = '';
foreach($data as $key => $value){
if($value instanceof CURLFile){
$fileContents = file_get_contents($value->getFilename());
$fileName = basename($value->getFilename());
$fileMimeType = $value->getMimeType();
$SaiedData .= "--" . $boundary . "\r\n";
$SaiedData .= 'Content-Disposition: form-data; name="' . $key . '"; filename="' . $fileName . '"' . "\r\n";
$SaiedData .= 'Content-Type: ' . $fileMimeType . "\r\n\r\n";
$SaiedData .= $fileContents . "\r\n";
}else{
$SaiedData .= "--" . $boundary . "\r\n";
$SaiedData .= 'Content-Disposition: form-data; name="' . $key . '"' . "\r\n\r\n";
$SaiedData .= $value . "\r\n";
}}
$SaiedData .= "--" . $boundary . "--\r\n";
return $SaiedData;
}
$update = json_decode(file_get_contents("php://input"));
if(isset($update->message)){
$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$scam = ['[','*',']','_','(',')','`','َ','ٕ','ُ','ِ','ٓ','ٓ','ٰ','ٖ','ً','ّ','ٌ','ٍ','ْ','ٔ',';'];
$name = str_replace($scam,null,$message->from->first_name." ".$message->from->last_name);
$from_id = $message->from->id;
$type = $message->chat->type;
}
if(isset($update->callback_query)){
$data = $update->callback_query->data;
$scam = ['[','*',']','_','(',')','`','َ','ٕ','ُ','ِ','ٓ','ٓ','ٰ','ٖ','ً','ّ','ٌ','ٍ','ْ','ٔ',';'];
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = str_replace($scam,null,$update->callback_query->from->first_name." ".$update->callback_query->from->last_name);
$user = $update->callback_query->from->username;
$from_id = $update->callback_query->from->id;
}
#Short
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
$typen = $message->chat->type;
$from_id = $message->from->id;
$forward =$message->forward_from_chat;
$forwardid = $message->forward_from_chat->id;
$text = $message->text;
### ALKINDI ###
$kindev=916165019; # ايديك
$sudo=$kindev;
### ALKINDI ###
$id = $message->from->id;
$caption = $update->message->caption;
$message_id = $message->message_id;
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}
### ALKINDI ###
if(isset($update->channel_post)){
 $chat_id = $update->channel_post->chat->id;
 $message_id = $update->channel_post->message_id;
 $message = $update->channel_post;
 $text = $update->channel_post->text;
 $textpost = $update->channel_post->text;
if($update->channel_post->message->caption){
$caption = $update->channel_post->message->caption;
}}
### ALKINDI ###
$my = file_get_contents("stting.txt");
$sttingsch = json_decode(file_get_contents("DEVER.json"),1);
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$settingdev = json_decode(file_get_contents("DEVER.json"),true);
$developer = $settingdev["developer"];
if(!$settingdev["source"]){
$em = "- ";
}
elseif($settingdev["source"]){
$em = $settingdev["source"];

}
### ALKINDI ###
$sudo = array("$kindev","916165019"); #ايدي متعدد
$idbot = "5441227528";
$userbot = "tgarbhmsbot";
$userbots = "@$userbot";
$buy = "hms_01";#معرفك بدون @
$chi = "botatiiii";#قناتك بدون @
### ALKINDI ###
mkdir("sudo");
mkdir("data");
### ALKINDI ###
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban);

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$members = file_get_contents("sudo/member.txt");#تخزين الاعضاء
$groups = file_get_contents("sudo/groups.txt");#تخزين القروبات
$ex_groups = explode("\n",$groups);
$countgroups = count($ex_groups)-1;
$channels = file_get_contents("sudo/channels.txt");#تخزين القنوات
$ex_channels = explode("\n",$channels);
$countchannels = count($ex_channels)-1;
//===۞𝗞𝗜𝗡𝗗𝗜۞===//
$amr = file_get_contents("sudo/amrs.txt");
$ch2 = file_get_contents("sudo/ch2.txt");
$amr = file_get_contents("sudo/amr.txt");
$kh = file_get_contents("sudo/ch.txt");
$ch2= file_get_contents("sudo/ch2.txt");
$taf3il = file_get_contents("sudo/tanbih.txt");
$estgbal = file_get_contents("sudo/estgbal.txt");
//===۞𝗞𝗜𝗡𝗗𝗜۞===//
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
$textpost = $update->channel_post->text;
$rec = $update->channel_post->reply_to_message->text;
$typee=file_get_contents("sudo/typee1.txt");
if($typee==null){
$typee=$kindev;
}
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
if($text && $settingdev["rmz"]=="$from_id" and in_array($from_id,$sudo)){
#bot('editmessagetext',[
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*تم تحديث رمز البوت $text *",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
$settingdev["rmz"]="done";
$settingdev["source"]="$text";
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}
elseif($data == "zzz" or $data == "تعين رموز السورس"){
if(in_array($from_id,$sudo)){
bot('editmessagetext',[
"message_id"=>$message_id,
"chat_id"=>$chat_id,
"text"=>"*ارسل الرمز الجديد*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
]);
$settingdev["rmz"]="$from_id";
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}}
elseif($data == "⋄ حذف رموز السورس" or $data == "حذف رموز السورس"){
if(in_array($from_id,$sudo)){
bot('editmessagetext',[
"message_id"=>$message_id,
"chat_id"=>$chat_id,
"text"=>"*تم الحذف*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
]);
unset($settingdev["source"]);
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
$t =$message->chat->title; 
$sstop=null;
function getChatstats($chat_id,$tokens){
$url =
'https://api.telegram.org/bot'.$tokens.'/getChatAdministrators?chat_id='.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->ok;
  return $result;
}
function getadmin($id,$from_id,$tokens){
$url = 'https://api.telegram.org/bot'.$tokens.'/getChatAdministrators?chat_id='.$id.'&user_id='.$from_id;
  $get = file_get_contents($url);
if(strpos($get,"$from_id") === false){
$ok="no";
}else{
$ok="yes";
}
return $ok;
}
function getmember($tokens,$idchannel,$from_id){
$join = file_get_contents("https://api.telegram.org/bot".$tokens."/getChatMember?chat_id=$idchannel&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"Bad Request: user not found"') or strpos($join,'"ok": false') or strpos($join,'"status":"kicked"')) !== false){
$NSSAR="no";}else{$NSSAR="yes";}
return $NSSAR;
}
function getmembergroup($tokens,$id,$from_id){
 $info2 = json_decode(file_get_contents("https://api.telegram.org/bot".$tokens."/getChatMember?chat_id=$id&user_id=$from_id"), true);
$info = $info2['result']['status'];
if($info=="left"){
$NSSAR="no";}else{$NSSAR="yes";}
return $NSSAR;
}
### ALKINDI ###
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
if(!file_exists("sudo.json")){
#	$put = [];
$infosudo["info"]["stbot"]="مفعل";
$infosudo["info"]["admins"][]="$admin";
$infosudo["info"]["fwrmember"]="معطل";
$infosudo["info"]["tnbih"]="مفعل";
$infosudo["info"]["silk"]="مفعل";
$infosudo["info"]["kindis"]="مفعل";
$infosudo["info"]["allch"]="مفردة";
$infosudo["info"]["start"]="non";
$infosudo["info"]["klish_info"]="non";
file_put_contents("sudo.json",json_encode($infosudo));
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$st_bot=$infosudo["info"]["stbot"];
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$kindis=$infosudo["info"]["kindis"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$start=$infosudo["info"]["start"];
$msrd_info=$infosudo["info"]["msrd_info"];
$klish_info=$infosudo["info"]["klish_info"];
#$klish_sil=$infosudo["info"]["klish_sil"];
if($thoil==null){$thoil=0;}

/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$chsudo=$infosudo["info"]["الرئيسية"];
$na_chsu=$chsudo["name"];
$id_chsu=$chsudo["id"];
$us_chsu=$chsudo["user"];
$st_chsu=$chsudo["st"];
$co_chsu=$chsudo["coin"];
$sudoamr= $infosudo["info"]["amr"];
$infosudo["info"]["amr"]="start";
function member($from_id,$p){
$memberjson = json_decode(file_get_contents("members.json"),true);
if($p!="null"){
if($p=="add"){
$memberjson["info"]["members"][]="$from_id";
}
if($p=="ban"){
$memberjson["info"]["ban"][]="$from_id";
}
file_put_contents("members.json", json_encode($memberjson));
}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($text=="$text" or $text=="/start" or $data=="back" or preg_match('/^\/([Ss]tart) (.*)/',$text)){
if($type=="private"){
if(preg_match('/^\/([Ss]tart) (.*)/',$text)){
preg_match('/^\/([Ss]tart) (.*)/',$text,$match);
$idmem=$match[2];
if($idmem!=null){
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$refjson = json_decode(file_get_contents("ref.json"),true);
$refjson["info"][$from_id]["st"]="yes";
$refjson["info"][$from_id]["text"]="$text";
file_put_contents("ref.json", json_encode($refjson));
}}
$false="";
if($allch!="مفردة"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$s ){
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($tokens,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($klish_sil == null and $type=="private"){
$klish_sil ="✬︙مرحبا بڪك عزيزي👲،
✬︙لا يمڪنـك استخدام البوت ،
✬︙عليك الإشتراڪك في قناهہ‌‏ البوت ،
✬︙*[اضغط هنا للإشتراڪك في القناهہ‌‏](t.me/$userchannel)* ،
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙بعـد الاشتراڪك ارسل { /start } ،
";
}
if($silk=="مفعل"){
$keyboard["inline_keyboard"][]=[['text'=>$namechannel,'url'=>$url]];
}else{
$txt=$txt."\n".$tt;
}$false="yes";
}}}
$reply_markup=json_encode($keyboard);
if($false=="yes"){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*$klish_sil*
$txt
",'parse_mode'=>"markdown", 
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup,
]);
return $false;}
}else{
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
foreach($orothe as $co=>$s ){
$keyboard["inline_keyboard"]=[];
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($tokens,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";

$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($klish_sil == null and $type=="private"){
$klish_sil ="✬︙مرحبا بڪك عزيزي👲،
✬︙لا يمڪنـك استخدام البوت ،
✬︙عليك الإشتراڪك في قناهہ‌‏ البوت ،
✬︙*[اضغط هنا للإشتراڪك في القناهہ‌‏](t.me/$userchannel)* ،
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙بعـد الاشتراڪك ارسل { /start } ،
";
}
if($silk=="مفعل"){
$keyboard["inline_keyboard"][]=[['text'=>$namechannel,'url'=>$url]];
}

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*$klish_sil*
",'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode($keyboard),
]);
return $false;
}}}}}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$refjson = json_decode(file_get_contents("ref.json"),true);
if($refjson["info"][$from_id]["st"]=="yes"){
$text=$refjson["info"][$from_id]["text"];
unset($refjson["info"][$from_id]);
file_put_contents("ref.json", json_encode($refjson));
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if(preg_match('/^\/([Ss]tart)(.*)/',$text)){
preg_match('/^\/([Ss]tart)(.*)/',$text,$match);
$idmem=$match[2];
$stn = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$idmem"))->result;
$nn= $stn->first_name." ".$stn->last_name;
if($idmem!=null and $nn!=null){
if($idmem!=$from_id){
if(!in_array($from_id,$member)){
if(in_array($idmem,$member)){
if(!in_array($idmem,$ban)){
$coins=coins($idmem,"z",$refl);
}}}}}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$t=time()+(3600  - 180);
for($i=0;$i<3;$i++){    
$t=$t+60;
$todaydate = date('Y-m-d',$t);
$now_date=date('H:i:s',$t);
if(file_exists("time/day/$todaydate.txt")){
$timeout=file_get_contents("time/day/$todaydate.txt");
$timeout1=explode("\n",$timeout);
}
if(is_file("time/".$now_date.".json") && !in_array($now_date,$timeout1)){
file_put_contents("time/day/$todaydate.txt",$now_date ."\n" , FILE_APPEND); 
file_put_contents("data/timeon.txt","$now_date");
$texttime="run_watawtime";
break;
}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($text == "الوقت" and in_array($from_id,$sudo)){
$t=time()+(3600* +1);
$todaydate = date('Y/m/d',$t);
$now_date=date('H:i:s',$t);
unlink("sudo/amr.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"الوقت الان 
$now_date
التاريخ
$todaydate
",'message_id'=>$message_id,
]);
}

///۞𝗞𝗜𝗡𝗗𝗜۞///
if($message and $kindis=="معطل" and !in_array($from_id,$sudo) and $type =="private" and $chat_id !=$channeladmin){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🕵 | مرحبا بك عزيزي ،
⚠ | #ناسف عن توقف البوت ،
⚙ | فقط تحت الصيانة والتحديث ،
🔘 | سيتم اعادته للخدمة الساعات القادمة ،*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
]);return false;
}
///۞𝗞𝗜𝗡𝗗𝗜۞///
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$amrjson=$fromjson["info"][$from_id]["amr"];
$coins=$fromjson["info"][$from_id]["coins"];
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$username = $message->from->username;
$user = $update->message->from->username;
//////Ali kindi //////
if($update and !in_array($from_id,$member) and $type=="private" and ! $data){
file_put_contents("sudo/member.txt","$from_id\n",FILE_APPEND);
if($tnbih=="مفعل"){
 if(!@$username){
$user="لايوجد معرف";
}elseif(@$username){
$user="@$username";
}
bot("sendmessage",[
"chat_id"=>$kindev,
"text"=>"*
✬︙أهلاً بك عزيزي المطور.
✬︙انت المطور الاساسي للبوت. 
✬︙هناك عضو قام بالدخول الى بوتك.
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙الاسم ⋙ *[$name](tg://user?id=$id)* .
✬︙الايدي ⋙ *`$from_id`*.
✬︙المعرف ⋙ $user .
✬︙عدد المشترڪين ⋙ $cunte .
✬︙عدد المجموعات المفعله ⋙ $countgroups .
✬︙عدد القنوات المستخدمة ⋙ $countchannels .
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙وقت الدخول ⋙ $now_date .
✬︙التاريخ ⋙ $todaydate .
*
",'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}}
///۞𝗞𝗜𝗡𝗗𝗜۞///
function coins($from_id,$p,$coin){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$coins=$fromjson["info"][$from_id]["coins"];
if($p!="null"){
if($p=="z"){
$co=$coins+$coin;
}
if($p=="n"){
$co=$coins-$coin;
}
$fromjson["info"][$from_id]["coins"]=$co;
file_put_contents("from_id.json", json_encode($fromjson));
return $co;
}else{
return $coins;
}}
#############
$fromjson = json_decode(file_get_contents("from_id.json"),true);
### ALKINDI ###

#===۞𝗞𝗜𝗡𝗗𝗜۞===#
if($message->new_chat_member and $message->new_chat_member->id == $idbot){
$count = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idbot"), true);
$bot = $info['result']['status'];
### ALKINDI ###
if($bot == "member"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' =>"- معلومات عن البوت 🕵",'callback_data'=>"info"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"
".$em." أهلاً بك عزيزي المطور
".$em." انت المطور الاساسي للبوت. 
".$em." هناك عضو قام باضافة البوت في. 
• ┉ • ┉ • ┉ • ┉ • ┉ •*
".$em."اسم المجموعة ⋙ـ $t
".$em."ايدي المجموعة ⋙ـ *`$chat_id`*
".$em."نوع الإضافة ⋙ عضوا فقط
".$em."اعضاء المجموعة ⋙ـ $count $l
".$em."عدد المجموعات المشتركة ⋙ـ $countgroups
".$em."قام بإضافتي ⋙ـ *[$name](tg://user?id=$from_id)*
*",'parse_mode'=>"markdown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
if($bot == "administrator"){
$export = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true,
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"
".$em."أهلاً بك عزيزي المطور
".$em."انت المطور الاساسي للبوت. 
".$em."هناك عضو قام باضافة البوت في. 
• ┉ • ┉ • ┉ • ┉ • ┉ •*
".$em."اسم المجموعة ⋙ـ $t
".$em."ايدي المجموعة ⋙ـ *`$chat_id`*
".$em."نوع الإضافة ⋙ مشرف
".$em."اعضاء المجموعة ⋙ـ $count $l
".$em."عدد المجموعات المشتركة ⋙ـ $countgroups
".$em."قام بإضافتي ⋙ـ *[$name](tg://user?id=$from_id)*
*",'parse_mode'=>"markdown",
'disable_web_page_preview'=> true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
if(!in_array($chat_id,$ex_groups)){
file_put_contents("sudo/groups.txt",
"$chat_id\n",FILE_APPEND);}
}
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
if($textpost){
if(!in_array($chat_id,$ex_channels)){
$use = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$chat_id"));
$users=$use->result->username;
$u= "@$users";
if($users==null){
$users = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id"))->result;
$u = "$users";
}
$count = bot('getchatmemberscount',[
'chat_id'=>$chat_id])->result;
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"
".$em."أهلاً بك عزيزي المطور
".$em."انت المطور الاساسي للبوت. 
".$em."هناك عضو قام باضافة البوت في. 
• ┉ • ┉ • ┉ • ┉ • ┉ •*
".$em."اسم القناة ⋙ـ $t
".$em."ايدي القناة ⋙ـ *`$chat_id`*
".$em."اعضاء القناة ⋙ـ $count $u
".$em."عدد القنوات المشتركة ⋙ـ $countchannels *
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])]);
file_put_contents("sudo/channels.txt",
"$chat_id\n",FILE_APPEND);
}}
 ### ALKINDI ###
if($data == "memb" and  in_array($from_id,$sudo)){
$userb = strtoupper($userbot);
if($sppedtime == 3  or $sppedtime <3){
$f ="ممتازه";}
if($sppedtime == 9 or $sppedtime >9){
$f ="جيده";}
if($sppedtime == 10 or $sppedtime >10){
$f ="ضعيفه";
}
bot('editmessagetext',[
"message_id"=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*
".$em." الاحصائيات .

".$em."عدد الاعضاء ⋙ $cunte ،
".$em."عدد المجموعات ⋙ $countgroups ،
".$em."عدد القنوات ⋙ $countchannels ،
".$em."السرعة ⋙ $f ،*
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
### ALKINDI ###
if($text=="الاوامر" or $text=="م" or $text=="مطور"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
if($type=="private"){
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"
".$em." اهلا بك عزيزي 🙋🏽‍♂
".$em."في اوامر البوت الكتابية !
• ┉ • ┉ • ┉ • ┉ • ┉ • 
".$em."الادمنية⇜لعرض قائمة الادمنية .
".$em."ارفعني⇜ارسل رقم الترقية لتصبح ادمن
".$em."ترقية⇜لإنشاء رمز الترقية .
".$em."تنزيل + ايدي⇜لتنزيل ادمن .
".$em."تواقيت⇜لعرض التواقيت .
--
",'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'📌 اعدادات تعيين الكلايش','callback_data'=>"nul"]],
[['text'=>'📑 البدء | start','callback_data'=>"welc"],['text'=>"📑 الاشتراك ",'callback_data'=>"klish_sil"],['text'=>'📑 التعليمات','callback_data'=>"infobot"]],
[['text'=>"- حالة البوت | $kindis",'callback_data'=>"kindis"]],
[['text'=>'🔒 قفل البوت','callback_data'=>"قفل البوت"],['text'=>'🔓 فتح البوت','callback_data'=>"فتح البوت"]],

[['text'=>'- تعيين الرموز','callback_data'=>"zzz"],['text'=>'- حذف الرموز','callback_data'=>"حذف رموز السورس"]],

[['text'=>'📌 اعدادات الاذاعة والاحصائية','callback_data'=>"null"]],
[['text'=>'⏺ اذاعة عامة ','callback_data'=>"ethaa"],['text'=>'⏰ اذاعة بالتوقيت','callback_data'=>"sendtime"],['text'=>'📊 الاحصائيات','callback_data'=>"memb"]],
[['text'=>'📌 اعدادات اشعارات البوت','callback_data'=>"nulll"]],
[['text'=>"👬 الدخول | $tnbih",'callback_data'=>"tnbih"],['text'=>"🔄 التوجيه | $fwrmember",'callback_data'=>"fwrmember"]],
[['text'=>'📌 اعدادات الاشتراك الاجباري','callback_data'=>"nullll"]],
[['text'=>'🛰 قنوات الاشتراك','callback_data'=>"viwechannel"],['text'=>"➖ حذف قنوات",'callback_data'=>"delchannel"],['text'=>"➕ اضافة قنوات",'callback_data'=>"addchannel"]],
[['text'=>'📌 اعدادات الحظر والرفع','callback_data'=>"nulllll"]],
[['text'=>'🚷المحظورين','callback_data'=>"ban"],["text"=>"🚫حظر","callback_data"=>"baan"],["text"=>"🚯الغاء ","callback_data"=>"unban"],["text"=>"🗑حذف عام","callback_data"=>"unbanall"]],
[['text'=>'📌 استقبال الرسائل للاعضاء','callback_data'=>"nullllll"]],
[['text'=>'💬 خاص البوت','callback_data'=>"typee"],
['text'=>'💬 المجموعة','callback_data'=>"supergruope"]],
[['text'=>'📌 اعدادات خاصة للمطور','callback_data'=>"nulllllll"]],
[['text'=>"👨‍🔧 الادمنية",'callback_data'=>"admins"],['text'=>'⌛️ انشاء نسخة','callback_data'=>"nnn"],["text"=>"⚠️ تهيئة البوت","callback_data"=>"delbot"]],
[['text'=>'📌 خيارات الاشتراك الاجباري','callback_data'=>"nullllllll"]],
[['text'=>"🛃 الزر انلاين | $silk",'callback_data'=>"silk"],['text'=>"📑 الكليشة | $allch",'callback_data'=>"allch"]]
]])
]);
}}
}
///۞𝗞𝗜𝗡𝗗𝗜۞///
if($data == "home" and in_array($from_id,$sudo)){
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
  ///۞𝗞𝗜𝗡𝗗𝗜۞///
function sendwataw($chat_id,$message_id){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$kindis=$infosudo["info"]["kindis"];

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="لايوجد محظورين";
}	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"
".$em." اهلا بك عزيزي 🙋🏽‍♂
".$em."في اوامر البوت الكتابية !
• ┉ • ┉ • ┉ • ┉ • ┉ • 
".$em."الادمنية⇜لعرض قائمة الادمنية .
".$em."ارفعني⇜ارسل رقم الترقية لتصبح ادمن
".$em."ترقية⇜لإنشاء رمز الترقية .
".$em."تنزيل + ايدي⇜لتنزيل ادمن .
".$em."تواقيت⇜لعرض التواقيت .
---
",'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'📌 اعدادات تعيين الكلايش','callback_data'=>"nul"]],
[['text'=>'📑 البدء | start','callback_data'=>"welc"],['text'=>"📑 الاشتراك ",'callback_data'=>"klish_sil"],['text'=>'📑 التعليمات','callback_data'=>"infobot"]],
[['text'=>"- حالة البوت | $kindis",'callback_data'=>"kindis"]],
[['text'=>'🔒 قفل البوت','callback_data'=>"قفل البوت"],['text'=>'🔓 فتح البوت','callback_data'=>"فتح البوت"]],

[['text'=>'- تعيين الرموز','callback_data'=>"zzz"],['text'=>'- حذف الرموز','callback_data'=>"حذف رموز السورس"]],

[['text'=>'📌 اعدادات الاذاعة والاحصائية','callback_data'=>"null"]],
[['text'=>'⏺ اذاعة عامة ','callback_data'=>"ethaa"],['text'=>'⏰ اذاعة بالتوقيت','callback_data'=>"sendtime"],['text'=>'📊 الاحصائيات','callback_data'=>"memb"]],
[['text'=>'📌 اعدادات اشعارات البوت','callback_data'=>"nulll"]],
[['text'=>"👬 الدخول | $tnbih",'callback_data'=>"tnbih"],['text'=>"🔄 التوجيه | $fwrmember",'callback_data'=>"fwrmember"]],
[['text'=>'📌 اعدادات الاشتراك الاجباري','callback_data'=>"nullll"]],
[['text'=>'🛰 قنوات الاشتراك','callback_data'=>"viwechannel"],['text'=>"➖ حذف قنوات",'callback_data'=>"delchannel"],['text'=>"➕ اضافة قنوات",'callback_data'=>"addchannel"]],
[['text'=>'📌 اعدادات الحظر والرفع','callback_data'=>"nulllll"]],
[['text'=>'🚷المحظورين','callback_data'=>"ban"],["text"=>"🚫حظر","callback_data"=>"baan"],["text"=>"🚯الغاء ","callback_data"=>"unban"],["text"=>"🗑حذف عام","callback_data"=>"unbanall"]],
[['text'=>'📌 استقبال الرسائل للاعضاء','callback_data'=>"nullllll"]],
[['text'=>'💬 خاص البوت','callback_data'=>"typee"],
['text'=>'💬 المجموعة','callback_data'=>"supergruope"]],
[['text'=>'📌 اعدادات خاصة للمطور','callback_data'=>"nulllllll"]],
[['text'=>"👨‍🔧 الادمنية",'callback_data'=>"admins"],['text'=>'⌛️ انشاء نسخة','callback_data'=>"nnn"],["text"=>"⚠️ تهيئة البوت","callback_data"=>"delbot"]],
[['text'=>'📌 خيارات الاشتراك الاجباري','callback_data'=>"nullllllll"]],
[['text'=>"🛃 الزر انلاين | $silk",'callback_data'=>"silk"],['text'=>"📑 الكليشة | $allch",'callback_data'=>"allch"]]
]])
]);
unlink("sudo/amr.txt");
}
### ALKINDI ###
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($text == "اذاعه" or $text == "اذاعة"){
if(in_array($from_id,$sudo)){ 
if($type=="private"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em."أهلا بك عزيزي في قسم الاذاعة
".$em."قم بتحديد نوع الاذاعة ومكان ارسال الاذاعة
".$em."ثم قم الضغط على ارسال الرسالة 
",'parse_mode'=>"markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"📯 نوع الاذاعة | $no3send",'callback_data'=>"button"]],
[['text'=>"🔂 توجيه",'callback_data'=>"forward"],
['text'=>"🔘 بدون اقتباس",'callback_data'=>"donfor"]],
[['text'=>"Ⓜ️ MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"🖇 HTML",'callback_data'=>"HTML"]],
[['text'=>"📬 ارسال الى | $chatsend",'callback_data'=>"button"]],
[['text'=>"👥 الكل",'callback_data'=>"all"],['text'=>"👤 الاعضاء",'callback_data'=>"member"]],
[['text'=>"🎛 المجموعات",'callback_data'=>"gruops"],['text'=>"🖥 القنوات",'callback_data'=>"channel"]],
[['text'=>"💬 ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>"العودة للخلف 🔙",'callback_data'=>"home"]],
]])
]);
}}
}
### ALKINDI ###
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($data == "ethaa" and in_array($from_id,$sudo)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"
".$em."أهلا بك عزيزي في قسم الاذاعة
".$em."قم بتحديد نوع الاذاعة ومكان ارسال الاذاعة
".$em."ثم اضغط على ارسال الرسالة
",'message_id' =>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"📯 نوع الاذاعة | $no3send",'callback_data'=>"button"]],
[['text'=>"🔂 توجيه",'callback_data'=>"forward"],
['text'=>"🔘 بدون اقتباس",'callback_data'=>"donfor"]],
[['text'=>"Ⓜ️ MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"🖇 HTML",'callback_data'=>"HTML"]],
[['text'=>"📬 ارسال الى | $chatsend",'callback_data'=>"button"]],
[['text'=>"👥 الكل",'callback_data'=>"all"],['text'=>"👤 الاعضاء",'callback_data'=>"member"]],
[['text'=>"🎛 المجموعات",'callback_data'=>"gruops"],['text'=>"🖥 القنوات",'callback_data'=>"channel"]],
[['text'=>"💬 ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>"العودة للخلف 🔙",'callback_data'=>"home"]],
]])
]);
}
function sendwataw2($chat_id,$message_id){
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"
".$em."أهلا بك عزيزي في قسم الاذاعة
".$em."قم بتحديد نوع الاذاعة ومكان ارسال الاذاعة
".$em."ثم اضغط على ارسال الرسالة
",'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"📯 نوع الاذاعة | $no3send",'callback_data'=>"button"]],
[['text'=>"🔂 توجيه",'callback_data'=>"forward"],
['text'=>"🔘 بدون اقتباس",'callback_data'=>"donfor"]],
[['text'=>"Ⓜ️ MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"🖇 HTML",'callback_data'=>"HTML"]],
[['text'=>"📬 ارسال الى | $chatsend",'callback_data'=>"button"]],
[['text'=>"👥 الكل",'callback_data'=>"all"],['text'=>"👤 الاعضاء",'callback_data'=>"member"]],
[['text'=>"🎛 المجموعات",'callback_data'=>"gruops"],['text'=>"🖥 القنوات",'callback_data'=>"channel"]],
[['text'=>"💬 ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>"العودة للخلف 🔙",'callback_data'=>"home"]],
]])
]);
}
### ALKINDI ###
if($data == "forward"){
file_put_contents("no3send.txt","forward");
sendwataw2($chat_id,$message_id);
}
if($data == "donfor"){
file_put_contents("no3send.txt","donfor");
sendwataw2($chat_id,$message_id);
}
if($data == "MARKDOWN"){
file_put_contents("no3send.txt","MARKDOWN");
sendwataw2($chat_id,$message_id);
}
if($data == "HTML"){
file_put_contents("no3send.txt","html");
sendwataw2($chat_id,$message_id);
}
if($data == "all"){
file_put_contents("chatsend.txt","all");
sendwataw2($chat_id,$message_id);
}
if($data == "member"){
file_put_contents("chatsend.txt","member");
sendwataw2($chat_id,$message_id);
}
if($data == "gruops"){
file_put_contents("chatsend.txt","gruops");
sendwataw2($chat_id,$message_id);
}
if($data == "channel"){
file_put_contents("chatsend.txt","channel");
sendwataw2($chat_id,$message_id);
}

$no3send=file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($data == "post" and $no3send!=null and $chatsend!=null){
if(in_array($from_id,$sudo)){
file_put_contents("sudo/amr.txt","sendsend");
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"
".$em."قم بارسال منشورك الان 

".$em."نوع الارسال : $no3send
".$em."مكان الارسال : $chatsend
",'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"❎ الغاء الامر ",'callback_data'=>"set"]],
]
])
]);
}}
if($data == "set" ){
if(in_array($from_id,$sudo)){
unlink("sudo/amr.txt");
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"✅| تم إلغاء الارسال بنجاح 
",'parse_mode' =>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}}
####kindi####
$forward = $update->message->forward_from;
$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;
if($amr=="sendsendtime" or  $amr=="sendsend" ){
if(in_array($from_id,$sudo)){
$poststatus="yes";
}}
if($poststatus=="yes"){
if($photo){
$sens="sendphoto";
$file_id = $update->message->photo[1]->file_id;
}
if($document){
$sens="senddocument";
$file_id = $update->message->document->file_id;
}
if($video){
$sens="sendvideo";
$file_id = $update->message->video->file_id;
}
if($audio){
$sens="sendaudio";
$file_id = $update->message->audio->file_id;
}
if($voice){
$sens="sendvoice";
$file_id = $update->message->voice->file_id;
}
if($sticker){
$sens="sendsticker";
$file_id = $update->message->sticker->file_id;
}
$poststatus=null;
}
mkdir("ms");
### ALKINDI ###
if($message and $text !="الاذاعة" and $amr == "sendsend" and $no3send=="forward"){
if(in_array($from_id,$sudo)){
unlink("sudo/amr.txt");
$rand=rand(11111111,99999999);
if($chatsend=="all"){
$for=$channels."\n".$groups."\n".$members;
$txt="
✅| تم التوجية : عام

".$em."خاص البوت : $cunte
".$em."المجموعات : $countgroups
".$em."القنوات : $countchannels";}
if($chatsend=="member"){
$for=$members;
$txt="".$em."تم التوجية: للاعضاء فقط
".$em."الاعضاء : $cunte";}
if($chatsend=="gruops"){
$for=$groups;
$txt="".$em."تم التوجية: المجموعات فقط
".$em."المجموعات : $countgroups";}
if($chatsend=="channel"){
$txt="".$em."تم التوجية: القنوات فقط
".$em."القنوات : $countchannels";
$for=$channels;
}
$foor=explode("\n",$for);
bot('ForwardMessage',[
'chat_id'=>$chat_id,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
for($i=0;$i<count($foor); $i++){
$get=bot('ForwardMessage',[
'chat_id'=>$foor[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
bot('sendmessage',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"$txt
".$em."كود المنشور : *`$rand`*
---
",'parse_mode' =>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🗑| حذف المنشور ",'callback_data'=>"delelink ".$rand]],
[['text'=>'💬| ارسال رسالة اخرى ','callback_data'=>"post"]],
[['text'=>'🔙 𝙱𝙰𝙲𝙺','callback_data'=>"home"]],
]])
]);
}}
### ALKINDI ###
if($message and $text !="الاذاعة" and $amr == "sendsend" and $no3send !="forward"){
if(in_array($from_id,$sudo)){
unlink("sudo/amr.txt");
$rand=rand(11111111,99999999);
if($chatsend=="all"){
$for=$channels."\n".$groups."\n".$members;
$txt="✅| تم النشر - عام للجميع

".$em."عدد الخاص : $cunte عضوا.
".$em."عدد المجموعات : $countgroups مجموعة.
".$em."عدد القنوات : $countchannels قناة.
";}
if($chatsend=="member"){
$for=$members;
$txt="✅| تم النشر - خاص - للاعضاء فقط 
✬︙عدد الاعضاء : $cunte";}
if($chatsend=="gruops"){
$for=$groups;
$txt="✅| تم النشر - خاص - المجموعات فقط 
✬︙عدد المجموعات : $countgroups";}
if($chatsend=="channel"){
$txt="✅| تم النشر - خاص - القنوات فقط 
✬︙عدد القنوات : $countchannels ";
$for=$channels;
}
### ALKINDI ###
$foor=explode("\n",$for);
if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text
",'reply_to_message_id'=>$message->message_id, 
'parse_mode'=>"markdown", 
]);
for($i=0;$i<count($foor); $i++){
$get=bot('sendMessage',[
'chat_id'=>$foor[$i],
'text'=>"$text
",'parse_mode'=>"$no3send",
'disable_web_page_preview'=>true,
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
}else{
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
for($i=0;$i<count($foor); $i++){
$ss=str_replace("send","",$sens);
$get=bot($sens,[
"chat_id"=>$foor[$i],
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}}
bot('sendmessage',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*$txt

".$em."كود المنشور: *`$rand`*
*--
",'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🗑| حذف المنشور ",'callback_data'=>"delelink ".$rand ]],
[['text'=>'💬| ارسال رسالة اخرى ','callback_data'=>"post"]],
[['text'=>'🔙 𝙱𝙰𝙲𝙺','callback_data'=>"home"]],
]])
]);
}}
### ALKINDI ###
if($data == "sendtime"){
if(in_array($from_id,$sudo)){
file_put_contents("sudo/amr.txt","sendtime");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⏰|حسنا قم بارسال الوقت 

6:00م : تعني الساعة السادسة مساء
6:00ص : تعني الساعة السادسة صباحاً
",'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"❎ الغاء الامر ",'callback_data'=>"sett"]],
]
])
]);
}}
if($data == "sett"){
if(in_array($from_id,$sudo)){
unlink("sudo/amr.txt");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"تم إلغاء الامر بنجاح ✅
",'message_id'=>$message_id,
]);
}}
### ALKINDI ###
if ($text and !$data and $amr=="sendtime"){
if(in_array($from_id,$sudo)){
mkdir("time");
mkdir("time/day");
if(strpos($text,"ص") !== false){
$tim = str_replace("ص","am",$text);
$time = str_replace("ص"," صباحاً",$time);
$time1 = date('H:i',strtotime("$tim"));
}
if(strpos($text,"م") !== false){
$tim = str_replace("م","pm",$text);
$time = str_replace("م"," مساء",$time);
$time1 = date('H:i',strtotime("$tim"));
}
file_put_contents("sudo/time.txt","$time1");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⏰| سيتم النشر في $text 
📟| اختار نوعية الارسال والفئة التي تريد الارسال لها 
",'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"📯 نوع الاذاعة | $no3send",'callback_data'=>"button"]],
[['text'=>"🔂 توجيه",'callback_data'=>"forward"],
['text'=>"🔘 بدون اقتباس",'callback_data'=>"donfor"]],
[['text'=>"Ⓜ️ MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"🖇 HTML",'callback_data'=>"HTML"]],
[['text'=>"📬 ارسال الى | $chatsend",'callback_data'=>"button"]],
[['text'=>"👥 الكل",'callback_data'=>"all"],
['text'=>"👤 الاعضاء",'callback_data'=>"member"]],
[['text'=>"🎛 المجموعات",'callback_data'=>"gruops"],
['text'=>"🖥 القنوات",'callback_data'=>"channel"]],
[['text'=>"💬 ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>"العودة للخلف 🔙",'callback_data'=>"home"]],
]])
]);
}}
### ALKINDI ###
$posttime=file_get_contents("sudo/time.txt");
if($data == "posttime" and $no3send!=null and $chatsend!=null){
if(in_array($from_id,$sudo)){
file_put_contents("sudo/amr.txt","sendsendtime");

bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"
⏰| ارسال بالتوقيت 
🕰| في $posttime 
⌛️| نوع الارسال : $no3send
📡| مكان الارسال : $chatsend
",'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"❎ الغاء الامر",'callback_data'=>"sett"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}}
### ALKINDI ###
if($message  and $text !="الاذاعة" and $amr == "sendsendtime" and $no3send=="forward"){
if(in_array($from_id,$sudo)){
unlink("sudo/amr.txt");
$send["info"]['chatsend']="$chatsend";
$send["info"]['send']="forward";
$send["info"]['method']="ForwardMessage";
$send["info"]['from_chat_id']="$chat_id";
$send["info"]['message_id']=$message->message_id;
file_put_contents("data/send.json", json_encode($send));
bot('ForwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>$chat_id,
	'message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔂| سيتم نشر التوجيه👆 
⏰| الساعة $posttime
💾| اضغط حفظ لاتمام العملية
",'message_id'=>$message_id,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'حفظ العملية ✅ ','callback_data'=>"sivetime"]],
]])
]);
}}
### ALKINDI ###
if($message and $text !="الاذاعة" and $amr == "sendsendtime"and $no3send !="forward"){
if(in_array($from_id,$sudo)){
unlink("sudo/amr.txt");
if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text
",'parse_mode'=>"$no3send",
'disable_web_page_preview'=>true,
]);
$send["info"]['chatsend']="$chatsend";
$send["info"]['send']="text";
$send["info"]['method']="sendMessage";
$send["info"]['text']="$text";
$send["info"]['parse_mode']=$no3send;
file_put_contents("data/send.json", json_encode($send));
}else{
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
$send["info"]['chatsend']="$chatsend";
$send["info"]['method']="$sens";
$send["info"]['send']="media";
$send["info"]['file_id']="$file_id";
$send["info"]['media']="$ss";
$send["info"]['caption']="$caption";
$send["info"]['parse_mode']=$no3send;
file_put_contents("data/send.json", json_encode($send));
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔂| سيتم نشر رسالتك👆 
⏰| الساعة $posttime
💾| اضغط حفظ لاتمام العملية
",'message_id'=>$message_id,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- حفظ المنشور 💾' ,'callback_data'=>"sivetime"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
}
if($data == "sivetime"){
if(in_array($from_id,$sudo)){
unlink("sudo/amr.txt");
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"✅| تم حفظ المنشور التالي 👇 
⏰| سيتم نشره في الساعة $posttime

",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
]);
$tt=str_replace(':','-',$posttime);
$sendjson = json_decode(file_get_contents("data/send.json"),true);
$method=$sendjson["info"]['method'];
$sendd=$sendjson["info"]['send'];
if($sendd=="forward"){
$from=$sendjson["info"]['from_chat_id'];
$msg=$sendjson["info"]['message_id'];
$data =array(
chat_id=>"$from_id",
from_chat_id=>$from,
message_id=>$msg,
);
}
if($sendd=="text"){
$parse=$sendjson["info"]['parse_mode'];
$text=$sendjson["info"]['text'];
$data =array(
chat_id=>"$from_id",
text=>$text,
parse_mode=>$parse,
);
}
if($sendd=="media" ){
$file_id=$sendjson["info"]['file_id'];
$media=$sendjson["info"]['media'];
$caption=$sendjson["info"]['caption'];
$parse=$sendjson["info"]['parse_mode'];
$data =array(
chat_id=>"$from_id",
$media=>$file_id,
caption=>$caption,
parse_mode=>$parse,
);
}
$b = http_build_query($data);
$link="https://api.telegram.org/bot".$token."/".$method."?$b";
file_get_contents($link);
$tt=str_replace(':','-',$posttime);
file_put_contents("time/$tt.json", json_encode($sendjson));
}
}
$timeon = file_get_contents("data/timeon.txt");
if($texttime=="run_watawtime" and is_file("time/".$timeon.".json")){
$rand=rand(11111111,99999999);
$json = json_decode(file_get_contents("time/".$timeon.".json"),true);
$senddd=$json["info"]['send'];
$chatsendd = $json["info"]['chatsend'];
$method=$json["info"]['method'];
if($chatsendd=="all"){
$for=$channels."\n".$groups."\n".$members;
$txt=" تم النشر - عام للجميع";
}
if($chatsendd=="member"){
$for=$members;
$txt=" تم النشر - خاص - للاعضاء فقط
$cunte";
}
if($chatsendd=="gruops"){
$for=$groups;
$txt=" تم النشر - خاص - القروبات فقط
$countgroups";
}
if($chatsendd=="channel"){
$txt=" تم النشر - خاص - القنوات فقط
$countchannels";
$for=$channels;
}
$from=$json["info"]['from_chat_id'];
$msg=$json["info"]['message_id'];
$parse=$json["info"]['parse_mode'];
$text=$json["info"]['text'];
$file_id=$json["info"]['file_id'];
$media=$json["info"]['media'];
$caption=$json["info"]['caption'];
$parse=$json["info"]['parse_mode'];
if($senddd=="forward"){
$foor=explode("\n",$for);
for($i=0;$i<count($foor); $i++){
$data =array(
chat_id=>$foor[$i],
from_chat_id=>$from,
message_id=>$msg,
);
$b = http_build_query($data);
$get=file_get_contents("https://api.telegram.org/bot".$token."/".$method."?$b");
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
}
if($senddd=="text"){
$foor=explode("\n",$for);
for($i=0;$i<count($foor); $i++){
$data =array(
chat_id=>$foor[$i],
text=>$text,
parse_mode=>$parse,
);
$b = http_build_query($data);
$get=file_get_contents("https://api.telegram.org/bot".$token."/".$method."?$b");
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
}
if($senddd=="media" ){
$foor=explode("\n",$for);
for($i=0;$i<count($foor); $i++){
$data =array(
chat_id=>$foor[$i],
$media=>$file_id,
caption=>$caption,
parse_mode=>$parse,
);
$b = http_build_query($data);
$get=file_get_contents("https://api.telegram.org/bot".API_KEY."/".$method."?$b");
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
}
bot('sendmessage',[
'chat_id'=>$typee,
'text'=>"⏰ | تم النشر بالتوقيت
$txt

🎫 | كود النشر :- `$rand`
",'parse_mode'=>'markdown',
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- حذف المنشور 🗑",'callback_data'=>"delelink ".$rand]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
### ALKINDI ###
if(preg_match('/^(delelink) (.*)/s',$data)){
$data1 = explode(" ",$data);
$mesg = $data1['1'];
if(is_file("ms/$mesg.txt")){
bot('editmessagetext',[
'message_id' =>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*⚠ هل تريد حذف المنشور الان ..

🎫 | كود النشر :- *`$mesg`**
",'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"-❌ لا ",'callback_data'=>"nodelpost"],['text'=>"- ✅ نعم",'callback_data'=>"delepost ".$mesg]],
]])
]);
}
}
### ALKINDI ###
if(preg_match('/^(delepost) (.*)/s',$data)){
$data1 = explode(" ",$data);
$mesg= $data1['1'];
$getmes_id = explode("\n", file_get_contents("ms/$mesg.txt"));
if(is_file("ms/$mesg.txt")){
bot('editmessagetext',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"جار حذف المنشور ...
",'parse_mode' =>"markdown",
]);
for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot".API_KEY."/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
}
$mesgg= $data1['1'];
bot('editmessagetext',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*✅| تم حذف المنشور بنجاح.

🎫| كود النشر :- *`$mesgg`**
",'parse_mode'=>'markdown',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙 𝙱𝙰𝙲𝙺','callback_data'=>"home"]],
]])
]);
}
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($data == "فتح البوت" and in_array($from_id,$sudo)){
$infosudo["info"]["kindis"]="مفعل";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"".$em." تم فتح البوت بنجاح 
",'parse_mode' =>"markdown",
"message_id"=>$message_id,
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}

if($data == "قفل البوت" and in_array($from_id,$sudo)){
$infosudo["info"]["kindis"]="معطل";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"".$em." تم قفل البوت بنجاح
",'parse_mode' =>"markdown",
"message_id"=>$message_id,
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}

### ALKINDI ###
if($data == "delchannel" and in_array($from_id, $sudo)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$s ){
$namechannel= $s["name"];
$st= $s["st"];
$userchannel= $s["user"];
if($namechannel!=null){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'callback_data'=>'null']];
if($st=="خاصة"){
$userchannel="null";
}
$keyboard["inline_keyboard"][] =
[['text'=>'🚫 حذف قناة ','callback_data'=>'deletchannel '.$co],['text'=>$st,'callback_data'=>'null']];
}}
### ALKINDI ###
$keyboard["inline_keyboard"][]=[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"".$em."قم بالضغط على خيار الحذف بالاسفل 
",'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>$reply_markup
]);
}
### ALKINDI ###
if(preg_match('/^(deletchannel) (.*)/s', $data)){
$nn = str_replace('deletchannel ',"",$data);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"✅| تم حذف القناة بنجاح 
-id $nn
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
unset($infosudo["info"]["channel"][$nn]);
file_put_contents("sudo.json", json_encode($infosudo));
}
#اضافة قنوات 
if($data == "addchannel"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$count=count($orothe);
if($count<4){
$infosudo["info"]["amr"]="addchannel";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"
".$em."مرحبا بك عزيزي↯
".$em."أرسل معرف القناة العامة الان
".$em."اذكانت خاصة قم بتوجية منشور .
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❎ | الغاء الامر",'callback_data'=>"home"]],
]
])
]);
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🚫 لا يمكنك اضافة اكثر من  3 قنوات 
--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
unlink("sudo.json");
}}
### ALKINDI ###
if($text  and $text !="/start" and $sudoamr=="addchannel" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){
$checkadmin = getChatstats($text,$tokens);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$text"))->result->title;
$infosudo["info"]["channel"][$ch_id]["st"]="عامة";
$infosudo["info"]["channel"][$ch_id]["user"]="$text";
$infosudo["info"]["channel"][$ch_id]["name"]="$namechannel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅| تم إضافة القناة بنجاح.
*info channel 
".$em."name : $namechannel
".$em."id : *`$ch_id`*
".$em."user : $text *
",'parse_mode' =>"markdown",
'disable_web_page_preview'=> true,'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- إضافة قناة آخرى",'callback_data'=>"addchannel"]],
 [['text'=>"- العودة والخروج",'callback_data'=>"home"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚠ المعذرة البوت ليس ادمن في القناة 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- إعادة المحاولة",'callback_data'=>"addchannel"]],
 [['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚠ المعذرة لم يتم إضافة القناة او لايوجد معرف /n $text 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($message->forward_from_chat and $sudoamr=="addchannel" and in_array($from_id, $sudo)){
$id_channel= $message->forward_from_chat->id;
if($id_channel != null){
$checkadmin = getChatstats($id_channel,$tokens);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$id_channel"))->result->title;
$infosudo["info"]["channel_id"]="$id_channel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫|تم حفظ معلومات القناة بنجاح.

*info channel 
".$em."name : $namechannel
".$em."id : *`$id_channel`*
".$em."user : • قناة خاصة •*

".$em." قم بارسال الرابط الخاص بالقناة الان
",'parse_mode'=>"MarkDown",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"❎ | الغاء الامر",'callback_data'=>"home"]],
 ]])
 ]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚠ عذرا البوت ليس ادمن في القناة 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Ⓜ️ | اعادة المحاولة",'callback_data'=>"addchannel"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);}}
$infosudo["info"]["amr"]="channel_id";
file_put_contents("sudo.json", json_encode($infosudo));
}
$channel_id=$infosudo["info"]["channel_id"];
if($text  and $text !="/start" and $sudoamr=="channel_id" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
$checkadmin = getChatstats($channel_id,$tokens);
### ALKINDI ###
if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$channel_id"))->result->title;
$infosudo["info"]["channel"][$channel_id]["st"]="خاصة";
$infosudo["info"]["channel"][$channel_id]["user"]="$text";
$infosudo["info"]["channel"][$channel_id]["name"]="$namechannel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫| تم حفظ رابط القناة بنجاح.

*info channel 
".$em."name : $namechannel
".$em."id : *`$channel_id`*
".$em."link : $text**

👾| تأكد ان البوت أدمن في القناة
",'parse_mode' =>"markdown",
'disable_web_page_preview'=> true,'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"📡| اضافة قناة اخرى",'callback_data'=>"addchannel"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚠ عذرا البوت ليس ادمن في القناة 
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"Ⓜ️ | اعادة المحاولة",'callback_data'=>"addchannel"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);
}
$infosudo["info"]["amr"]="null";
$infosudo["info"]["channel_id"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
# عرض القنوات
if($data == "viwechannel" and in_array($from_id, $sudo)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co ){
$namechannel= $co["name"];
$st= $co["st"];
$userchannel= $co["user"];
if($namechannel!=null){
$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'callback_data'=>'null']];
if($st=="خاصة"){
$userchannel="null";
}
$keyboard["inline_keyboard"][] =
[['text'=>$userchannel,'callback_data'=>'null'],['text'=>$st,'callback_data'=>'null']];
}}
$keyboard["inline_keyboard"][] = [['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"📋| قائمة القنوات المشتركة
",'parse_mode'=>"MarkDown",
'message_id'=>$message_id,
'reply_markup'=>$reply_markup
]);
}
#كليشة الاشتراك
if($data == "klsh"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
$infosudo["info"]["klish_sil"]="$text";
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"✅ تم إلغاء الامر بنجاح
",'message_id'=>$message_id,
]);}}

if($data == "klish_sil"){
$infosudo["info"]["amr"]="klish_sil";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"*
".$em."قم بارسال كليشة الاشتراك الان...
*--
",'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء الامر ❌",'callback_data'=>"klsh"]],
]
])
]);
}
if($text and $text !="/start" and $sudoamr=="klish_sil" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*✅| تم حفظ كليشة الاشتراك الاجباري 
- الكليشة : 
$text
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["klish_sil"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}

####### التوجيه ####
if($message and $fwrmember=="مفعل"){
bot('ForwardMessage',[
 'chat_id'=>$kindev,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
}
####start##
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];
if($data == "welc"){
$text = str_replace('{الاسم}',$name,$text);
$infosudo["info"]["amr"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*
".$em."قم بارسال نص كليشة الترحيب /start
لاظهار الاسم الاسم
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء الامر ❌",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="start" and in_array($from_id,$sudo)){
$text = str_replace('{الاسم}',$name,$text);
bot('sendmessage',[
'message_id' =>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*✅| تم حفظ كليشة الترحيب /start 
- الكليشة : 
$text 
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["start"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
#####info######
if($data == "infobot"){
$text = str_replace('{الاسم}',$name,$text);
$infosudo["info"]["amr"]="klis_info";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*- قم بارسال نص كليشة نبذة عن البوت
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء الامر ❌",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="klis_info" and in_array($from_id,$sudo)){
$text = str_replace('{الاسم}',$name,$text);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*✅| تم حفظ كليشة نبذة عن البوت .
- الكليشة : 
$text 
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["klish_info"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
#######
if($data == "silk"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$skil=$infosudo["info"]["silk"];
if($skil=="مفعل" or $text == "offff"){
$infosudo["info"]["silk"]="معطل";
}
if($skil=="معطل" or $text == "onnnn"){
$infosudo["info"]["silk"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "allch"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$allch=$infosudo["info"]["allch"];
if($allch=="مفردة"){
$infosudo["info"]["allch"]="مجموعة";
}
if($allch=="مجموعة"){
$infosudo["info"]["allch"]="مفردة";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
########
$memberi = explode("\n",file_get_contents("sudo/member.txt"));
$cuntei = count($memberi)-1;
$getben = explode("\n",file_get_contents("data/ban.txt"));
$countben = count($getben)-1;
if($data == 'ban'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عدد المحظورين' .$countben,
 'show_alert'=>true
 ]);      
}
if($data == "baan"){
$infosudo["info"]["amr"]="ban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"*- قم بارسال أيدي العضو لحظره
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
}
if($text and $text !="/start" and $sudoamr=="ban" and in_array($from_id,$sudo) and is_numeric($text)){
if(!in_array($text,$ban)){
member($text,'ban');
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حظر العضو بنجاح 
$text
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"❌ لقد قام الادمن بحظرك من استخدام البوت",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 العضو محظور مسبقاً",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
#الغاء الحظر
if($data == "unban"){
$infosudo["info"]["amr"]="unban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال أيدي العضو للإلغاء الحظر عنه
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="unban" and in_array($from_id,$sudo) and is_numeric($text)){
if(in_array($text,$ban)){
$memberjson = json_decode(file_get_contents("members.json"),true);
$ban=$memberjson["info"]["ban"];

$index = array_search($text, $ban);
unset($memberjson["info"]["ban"][$index]);
$memberjson["info"]["ban"]=array_values($memberjson["info"]["ban"]);
file_put_contents("members.json", json_encode($memberjson));
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم الغاء حظر العضو بنجاح 
$text
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"✅ لقد قام الادمن بالغاء الحظر عنك  .",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 العضو ليسِ محظور مسبقاً",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
$count_ban = count($ban);
if($data == "unbanall"){
if($countban > 0){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم مسح قائمة المحظورين بنجاح 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id' =>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
}else{
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"🚫 ليس لديك اعضاء محظورين",
'show_alert'=>true
]);}}
##########
if($data == "typee" and in_array($from_id,$sudo)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- تم تفعيل استقبال الرسائل خاص
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙 𝙱𝙰𝙲𝙺 ','callback_data'=>"home"]],
]])
]);
file_put_contents("sudo/typee1.txt","$from_id");
}
if($data == "supergruope" and in_array($from_id,$sudo)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
حسننا قم بالذهاب الى جروب الاستقبال 
ثم ارسل الامر. /setastgbal
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
file_put_contents("sudo/amr.txt","set");
}
### ALKINDI ###
if($text=="/setastgbal" and $amr == "set" and in_array($from_id, $sudo)){
file_put_contents("sudo/amr.txt","");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>"*
".$em."تم تحديد هذا الجروب ليكون جروبا للاستقبال 
*---
",'parse_mode' =>"markdown",
'disable_web_page_preview'=>true ,
]);
file_put_contents("sudo/typee1.txt","$chat_id");
}
### ALKINDI ###
if($text == "تواقيت" and in_array($from_id,$sudo)){
$file = scandir('time/');
$s=0;$s1=0;
for($l=2;$l<count($file);$l++){
if(file_exists("time/".$file[$l]) and strpos($file[$l],".json") !== false){

$s1=1;
$tim=file_get_contents("time/".$file[$l]);
$time=str_replace(".json","",$file[$l]);
$del=str_replace("-","_",str_replace(".json","",$file[$l]));
$delet="/delete_".$del;
$time2=str_replace("-",":",$time);
$ex=explode(":",$time2);
$sa=$ex['0'];
$da=$ex['1'];
if($sa >= 13){
$saa=$sa-12;
$time3=$saa.":".$da." مساء";
}
if($sa == 12){
$saa=$sa;
$time3=$saa.":".$da." مساء";
}
if($sa < 12){
$time3=$time2." صباحاً";
}
if($del!=null){
$usch1=$usch1."\n⏰ $time3 \n🗑 $delet";
}
}
}
########
if($s1==0)
{$usch1="⏰| لايوجد تواقيت ";}
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$usch1
",'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" 🗑حذف التوقيت ...🗑",'callback_data'=>"del_time ".$text]],
[['text'=>" 🗑حذف التواقيت ...🗑",'callback_data'=>"del_time"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"admin"]],
[['text'=>'🔙 𝙱𝙰𝙲𝙺 ','callback_data'=>"home"]],
]])
]);
}
### ALKINDI ###
if(stristr($text,"/delete_") and in_array($from_id, $sudo)){
$text=str_replace("/delete_","",$text);
$text=str_replace("@".$userbot,"",$text);
$text=str_replace("_","-",$text);
$sendjson = json_decode(file_get_contents("time/$text.json"),true);
$method=$sendjson["info"]['method'];
$sendd=$sendjson["info"]['send'];
if($sendd=="forward"){
$from=$sendjson["info"]['from_chat_id'];
$msg=$sendjson["info"]['message_id'];
$data =array(
chat_id=>"$from_id",
from_chat_id=>$from,
message_id=>$msg,
);
}
if($sendd=="text"){
$parse=$sendjson["info"]['parse_mode'];
$text=$sendjson["info"]['text'];
$data =array(
chat_id=>"$from_id",
text=>$text,
parse_mode=>$parse,
);
}
if($sendd=="media"){
$file_id=$sendjson["info"]['file_id'];
$media=$sendjson["info"]['media'];
$caption=$sendjson["info"]['caption'];
$parse=$sendjson["info"]['parse_mode'];
$data =array(
chat_id=>"$from_id",
$media=>$file_id,
caption=>$caption,
parse_mode=>$parse,
);
}
$b = http_build_query($data);
$link="https://api.telegram.org/bot".$token."/".$method."?$b";
file_get_contents($link);
bot('SendMessage', [
'chat_id' => $chat_id,
'text'=>" ⏰ هذا هو المنشور 👆
قم بالضغط على حذف للتاكيد 
",'parse_mode'=>"html",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" 🗑حذف التوقيت ...🗑",'callback_data'=>"del_time ".$text]],
[['text'=>" 🗑حذف التواقيت ...🗑",'callback_data'=>"del_time"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"admin"]]
]])]);
}
if(preg_match('/^(del_time) (.*)/s',$data) and in_array($from_id, $sudo)){
$data1 = explode(" ",$data);
$time1 = $data1['1'];
unlink("time/".$data1['1'].".json");
bot('editmessagetext', [
'chat_id' => $chat_id,
'text'=>"✅| تم حذف التوقيت بنجاح
$time1
",'message_id'=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙 𝙱𝙰𝙲𝙺 ','callback_data'=>"home"]],
]])
]);
}
if($text == "❎ | الغاء الامر" or $data == "del_time"and $sting =="sting" and in_array($from_id,$sudo)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ | تم حذف التواقيت " 
]);
unlink("time/".$data1['1'].".json");
} 

#######
if($data == "fwrmember"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
if($fwrmember=="مفعل"){
$infosudo["info"]["fwrmember"]="معطل";
}
if($fwrmember=="معطل"){
$infosudo["info"]["fwrmember"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
#########
if($data == "tnbih"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$tnbih=$infosudo["info"]["tnbih"];
if($tnbih=="مفعل"){
$infosudo["info"]["tnbih"]="معطل";
}
if($tnbih=="معطل"){
$infosudo["info"]["tnbih"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
#########
if($data == "silk"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$skil=$infosudo["info"]["silk"];
if($skil=="مفعل"){
$infosudo["info"]["silk"]="معطل";
}
if($skil=="معطل"){
$infosudo["info"]["silk"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "kindis"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$kindis=$infosudo["info"]["kindis"];
if($kindis=="مفعل"){
$infosudo["info"]["kindis"]="معطل";
}
if($kindis=="معطل"){
$infosudo["info"]["kindis"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
### ALKINDI ###
function KINDEZip($KINDEZip1, $KINDEZip2){
$KINDEZip4 = realpath($KINDEZip1);
$KINDEZip = new ZipArchive();
$KINDEZip->open($KINDEZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$KINDEZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($KINDEZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($KINDEZip3 as $KINDEZip5 => $KINDEZip6){

if(!$KINDEZip6->isDir()){
$KINDEZip7 = $KINDEZip6->getRealPath();
$KINDEZip8 = substr($KINDEZip7, strlen($KINDEZip4) + 1);
$KINDEZip->addFile($KINDEZip7, $KINDEZip8);
}}
$KINDEZip->close();
}
# كود حجم الملف لـ @MrDGSY #
function KINDEZip1($KINDEZip9, $KINDEZip10 = 2){
$KINDEZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$KINDEZip12=floor((strlen($KINDEZip9) - 1) / 3);
return sprintf("%.{$KINDEZip10}f", $KINDEZip9 / pow(1024, $KINDEZip12)) . @$KINDEZip11[$KINDEZip12];
} 
### ALKINDI ###
$NSSAR = "$kindev";
if($data== "nnn" and $from_id == $NSSAR){
date_default_timezone_set("Asia/Damascus");
$time = date("{h-i-s}");
KINDEZip('./', "Backup-$time.zip");
bot('sendmessage',[
'chat_id'=>$from_id,
'text'=>"جار انشاء النسخة الاحتياطية",
]);
bot('senddocument',[
'chat_id'=>$from_id,
'document'=>new CURLFile("Backup-$time.zip"),
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
File size : ".KINDEZip1(filesize("Backup-$time.zip"))." 🏷",
]);
unlink("Backup-$time.zip");
}
### ALKINDI ###
if($text == "تهيئة" || $text == "اعادة" || $text == "تصفية" || $text == "فرمته"){
if(in_array($from_id,$sudo)){
bot('sendmessage',[

'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*
".$em."مرحبا عزيزي المطور
".$em."سيتم اعادة ضبط كل معلومات البوت
".$em."سيتم فقد كل التخزين السابق للبوت تابع ↯
*--
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- ✅ | نعم","callback_data"=>"dell"],["text"=>"- ❎ | لا","callback_data"=>"home"]],
]])
]);   
}}
if($data == "اعادة الضبط" and $from_id == $kindev){
#bot('sendmessage',[
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*
".$em."مرحبا عزيزي المطور
".$em."سيتم اعادة ضبط كل معلومات البوت
".$em."سيتم فقد كل التخزين السابق للبوت تابع ↯
*--
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- ✅ | نعم","callback_data"=>"dell"],["text"=>"- ❎ | لا","callback_data"=>"home"]],
]])
]);   
}
if($data == "delbot" and $from_id == $kindev){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
".$em."مرحبا عزيزي المطور
".$em."سيتم اعادة ضبط كل معلومات البوت
".$em."سيتم فقد بيانات كل التخزين السابق للبوت..*
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- ✅ نعم","callback_data"=>"dell"],["text"=>"- ❎ لا","callback_data"=>"home"]],
]])
]);   
}
### kindi3 ###
if($data == "dell" and $from_id == $kindev){
 bot('editMessageText',[
 'chat_id'=>$chat_id,
'message_id'=>$message_id ,
 'text'=>"*• بدء التحديث الان ...*
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message->message_id, 
]);
unlink("amr.txt");
unlink("sudo/amr.txt");
unlink("sudo/amrs.txt");
unlink("sudo/infobot.txt");
unlink("sudo/start.txt");
unlink("amr.txt","yes");
unlink("sudo/member.txt");
unlink("sudo/groups.txt");
unlink("sudo/channels.txt");

unlink("sudo/admin.txt");
unlink("data/sudo.json");
unlink("sudo/tanbih.txt");
unlink("sudo/estgbal.txt");
unlink("sudo.json");
unlink("data.json");

unlink("sudo/ban.txt");
unlink("sudo/typee1.txt");
unlink("from_id.json");
unlink("tmoil.json");
unlink("ref.json");

unlink("data/timeon.txt","$now_date");
unlink("time/day/$todaydate.txt");
unlink("time/".$now_date.".json");
unlink("sudo/member.txt");

unlink("tv.txt");
unlink("ch.txt");

bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id ,
'text'=>"".$em."مرحبا بك مطوري ؛ 
".$em."تم اعادة الضبط بنجاح تم التحديث ؛
".$em."تم تصفية البوت وحذف التخزين من السيرفر ؛ 
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"🔙 𝙱𝙰𝙲𝙺","callback_data"=>"home"]],
]])
]);   
}
# ALKINDI #
$datacount = json_decode(file_get_contents("data.json"),true);
if(!file_exists("data.json")){
# $put = [];
$datacount["info"]["number"]=2000000;
file_put_contents("data.json", json_encode($datacount));
}
$countdata=$datacount["info"]["number"];
if($text=="test" and in_array($from_id,$sudo)){
if($countdata<= 2000010){
$time = date("h:i:s");
$count=$countdata+1;
bot('sendmessage',[
'chat_id'=>$from_id,
'text'=>" ✅ تم الاتصال 
-count : $count
- time : $time
",
]);
$datacount["info"]["number"]=$count;
file_put_contents("data.json", json_encode($datacount));
}else{
$time = date("h:i:s");
$count=$countdata;
bot('sendmessage',[
'chat_id'=>$from_id,
'text'=>" ℹ تم الوصول للعدد النهائي سيتم اعادة العدد للرقم الرئيسي 
 
-count : $count
- time : $time
",
]);
$datacount["info"]["number"]=2000000;
file_put_contents("data.json", json_encode($datacount));
}} 
 ### ALKINDI ###
if($text == "اصدار الاستضافه" or $text == "الاصدار" or $text == "اصدار" and in_array($from_id,$sudo)) {
  $ver = phpversion();  
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
• ᴘʜᴘ ᴠᴇʀ : <code>$ver</code>
",'parse_mode'=>"HTML",'reply_to_message_id'=>$message_id,
  ]); 
  }

### ALKINDI ###
$fromjson = json_decode(file_get_contents("from_id.json"),true);
if($text=="/start" and $type=="private"){
$name = $message->from->first_name;
$start = str_replace('الاسم',$name,$start);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$start
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'قسم المساعدة 📢','callback_data'=>'info']],
[['text'=>'📊 احصائيات البوت','callback_data'=>"memb99"]],
[['text'=>'- المطور 🐼.','url'=>"t.me/$buy"],['text'=>'- التحديثات ❄.','url'=>"t.me/botatiiii"]],
[['text'=>"-👮 لإضافة البوت لقناتك",'url'=>"https://telegram.me/$userbot?startchannel=start"]],
[['text'=>"- دعوة البوت الى المجموعة 🖇 ",'url'=>"https://telegram.me/$userbot?startgroup=start"]],
]])]);}
### ALKINDI ###
if($data=="back"){
$coins=coins($from_id,"null",$coo);
$fromjson["info"][$from_id]["amr"]="non";
$start = str_replace('الاسم',$name,$start);
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"$start
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'قسم المساعدة 📢','callback_data'=>'info']],
[['text'=>'📊 احصائيات البوت','callback_data'=>"memb99"]],
[['text'=>'- المطور 🐼.','url'=>"t.me/$buy"],['text'=>'- التحديثات ❄.','url'=>"t.me/botatiiii"]],
[['text'=>"-👮 لإضافة البوت لقناتك",'url'=>"https://telegram.me/$userbot?startchannel=start"]],
[['text'=>"- دعوة البوت الى المجموعة 🖇 ",'url'=>"https://telegram.me/$userbot?startgroup=start"]],
]])]);}
  ///۞𝗞𝗜𝗡𝗗𝗜۞///
if($data=='info'){
$coins=coins($from_id,"null",$coo);
$fromjson["info"][$from_id]["amr"]="non";
$name = $message->from->first_name;
$klish_info=str_replace('الاسم',$name,$klish_info);
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>" 
$klish_info
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- تابع قناة المطور 📡.",'url'=>"t.me/$chi"]],
[['text'=>'🔙 𝙱𝙰𝙲𝙺','callback_data'=>'back']],
]])]);}
 ### ALKINDI ###
if($data == "memb99" ){
$userb = strtoupper($userbot);
if($sppedtime == 3  or $sppedtime <3){
$f ="ممتازه";}
if($sppedtime == 9 or $sppedtime >9){
$f ="جيده";}
if($sppedtime == 10 or $sppedtime >10){
$f ="ضعيفه";
}
bot('editmessagetext',[
"message_id"=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*
".$em." الاحصائيات .

".$em."عدد الاعضاء ⋙ $cunte ،
".$em."عدد المجموعات ⋙ $countgroups ،
".$em."عدد القنوات ⋙ $countchannels ،
".$em."السرعة ⋙ $f ،*
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"st"]],
]])
]);
}

$Devid = "916165019";
$poDev = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$Devid"),true);
$potosDev = $poDev["result"]["photos"][0][0]["file_id"];
$infoDev = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChat?chat_id=$Devid"));
$nameDev = $infoDev ->result->first_name;
$userDev = $infoDev ->result->username;
$infobio = bot('getchat',['chat_id'=>$Devid])->result;
$bioDev =  $infobio->bio;
if($bioDev != null){
$bioDev = "$bioDev";
}elseif($bioDev == null){
$bioDev = "لا تمتلك بايو";
}
if(!@$userDev){$carlos = "لايوجد معرف للمطور";}
elseif(@$userDev){$carlos = "@$userDev";}
if($text == "المطور" or $text == 'مطور'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'photo'=>"$potosDev",
'caption'=>"
⁦♡⁩ اهلا بكم في عالمي الخاص ⁦♡
⁩
•━═━═━═━ٰٰ𝙷ٍْ𝙼ٍْ𝚂ْ 𓃠𝄬𔘓   ═━═━═━•

☆︙*المطور* ← $nameDev
☆︙*المعرف* ← [$carlos]
☆︙*الايدي* ← $Devid
☆︙*بايو* ← [$bioDev]
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙*الوقت* ⋙ $now_date .
✬︙*التاريخ* ⋙ $todaydate .
",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>'☆︙ 𝓢𝓞𝓤𝓡 𝓒 𝓔 𝓗𝓜𝓢  ︙☆','url'=>'t.me/hms_01']],
[['text'=>'☆︙♔... « 𝙷𝙼𝚂 » ...♔︙☆','url'=>'t.me/hms_00']], 
[['text'=>'☆︙𖣴 𝙼𝙰𝚈 𝙱𝙾𝚃𝚂 𖣴 ︙☆','url'=>'t.me/botatiiii']], 
[['text'=>'☆︙♡ آج‌ــ‌๋ـر ♡ ︙☆','url'=>'t.me/ddeneat']], 
[['text'=>"*اضف البوت لمجموعتك*",'url'=>'https://telegram.me/userbot?startgroup=start']],
]
])
]);
}
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
$tilitet="♽ قم بمشاركة البوت ♽";
$index="<h2>@hms_01</link>";
$name = $message->from->first_name;
$start = str_replace('الاسم',$name,$start);
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,    
'results'=>json_encode([['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"☛ اضغط هنا لنشر المحتوى
",'input_message_content'=>[
'parse_mode'=>"HTML",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,'message_text'=>"$start"],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>"♽ معاينة البوت اضغط هنا ♽ ",'url'=>"https://telegram.me/$userbot?start"]],[['text'=>"$tilitet ",'switch_inline_query'=>"$from_id"]], 
[['text'=>'- المطور 👨‍✈️.','url'=>"t.me/$buy"]],
]]
]])
]);

#• ┉ • ┉  بداية •الملف ┉ • ┉ •#

function sendmessage($chat_id, $text, $model){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode
 ]);
 }
 function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendsticker($chat_id, $photo, $captionl){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption){
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 ]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption,
 ]);
 }

 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
	
	function save($filename,$TXTdata)
	{
	$myfile = fopen("data/".$filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
 //====================the file by mounir======================//

$bot_ = "tgarbhmsbot"; // add your bot username 
$sudo = 916165019; // add your id 
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$textid = $message->text->id;
$text = $message->text;
$textmessage = isset($update->message->text)?$update->message->text:'';
$myphoto = $update->message->file_size;
$edit = $update->edited_message;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
  
$new_gp_name = $update->message->new_chat_title;
$new_gp_photo = $update->message->new_chat_photo;
$del_gp_photo = $update->message->delete_chat_photo;
$new_member = $update->message->new_chat_member;
$left = $update->message->left_chat_member;
$contact = $update->message->contact;
$audio = $update->message->audio;
$location = $update->message->location;
$memb = $update->message->message_id;
$game = $update->message->game; 
$name = $update->message->from->first_name;
$gp_name = $update->message->chat->title;
$user = $update->message->from->username;
$for = $update->message->from->id;
$sticker = $update->message->sticker;
$video = $update->message->video;
$photo = $update->message->photo;
$voice = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$fwd_id = $update->message->forward_from->id;
$fwd_to = $update->message->forward_to;
$fwd_user = $update->message->forward_from->username;
$fwd_name = $update->message->forward_from->first_name;
$pin = $update->message->pinned_message;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$message_id = $update->message->message_id;
$type = $update->message->chat->type;

$number = str_word_count($text);
$numper = strlen($text);

$cllchatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$cllmsegid = $update->callback_query->message->message_id;
$cllfor = $update->callback_query->from->id;

$gplang1 = file_get_contents("data/$chat_id/lang.txt");
$gplink = file_get_contents("data/$chat_id/gplink.txt");
$getruels = file_get_contents("data/$chat_id/rules.txt");
$getwelcome = file_get_contents("data/$chat_id/welcome.txt");
$photo1 = file_get_contents("data/$chat_id/photo.txt");
$sticker1 = file_get_contents("data/$chat_id/sticker.txt");
$pin1 = file_get_contents("data/$chat_id/pin.txt");
$contact1 = file_get_contents("data/$chat_id/contact.txt");
$doc1 = file_get_contents("data/$chat_id/doc.txt");
$game1 = file_get_contents("data/$chat_id/game.txt");
$fwd1 = file_get_contents("data/$chat_id/fwd.txt");
$voice1 = file_get_contents("data/$chat_id/voice.txt");
$link1 = file_get_contents("data/$chat_id/link.txt");
$audio1 = file_get_contents("data/$chat_id/audio.txt");
$video1 = file_get_contents("data/$chat_id/video.txt");
$text1 = file_get_contents("data/$chat_id/text.txt");
$tag1 = file_get_contents("data/$chat_id/tag.txt");
$edit1 = file_get_contents("data/$chat_id/edit.txt");
$edit123 = file_get_contents("data/$chat_edit_id/edit.txt");
$lang1 = file_get_contents("data/$chat_id/lang.txt");
$location1 = file_get_contents("data/$chat_id/location.txt");
$long_list1 = file_get_contents("data/$chat_id/long_list.txt");
$menglish1 = file_get_contents("data/$chat_id/menglish.txt");
$marabi1 = file_get_contents("data/$chat_id/marabi.txt");
$mpersian1 = file_get_contents("data/$chat_id/mpersian.txt");
$gif1 = file_get_contents("data/$chat_id/gif.txt");
$allmsg = file_get_contents("data/allmsg.txt");
$allmsgpv = file_get_contents("data/allmsgpv.txt");

$gplang12 = file_get_contents("data/$cllchatid/lang.txt");
$photo12 = file_get_contents("data/$cllchatid/photo.txt");
$sticker12 = file_get_contents("data/$cllchatid/sticker.txt");
$pin12 = file_get_contents("data/$cllchatid/pin.txt");
$doc12 = file_get_contents("data/$cllchatid/doc.txt");
$game12 = file_get_contents("data/$cllchatid/game.txt");
$fwd12 = file_get_contents("data/$cllchatid/fwd.txt");
$voice12 = file_get_contents("data/$cllchatid/voice.txt");
$contact12 = file_get_contents("data/$cllchatid/contact.txt");
$location12 = file_get_contents("data/$cllchatid/location.txt");
$long_list12 = file_get_contents("data/$cllchatid/long_list.txt");
$link12 = file_get_contents("data/$cllchatid/link.txt");
$audio12 = file_get_contents("data/$cllchatid/audio.txt");
$video12 = file_get_contents("data/$cllchatid/video.txt");
$text12 = file_get_contents("data/$cllchatid/text.txt");
$tag12 = file_get_contents("data/$cllchatid/tag.txt");
$edit12 = file_get_contents("data/$cllchatid/edit.txt");
$lang12 = file_get_contents("data/$cllchatid/lang.txt");
$menglish12 = file_get_contents("data/$cllchatid/menglish.txt");
$marabi12 = file_get_contents("data/$cllchatid/marabi.txt");
$mpersian12 = file_get_contents("data/$cllchatid/mpersian.txt");
$gif12 = file_get_contents("data/$cllchatid/gif.txt");
$silent = file_get_contents("data/$chat_id/silent.txt");
$super_silent = explode("\n", $silent);

$warn = file_get_contents("data/$chat_id/warn/warn.txt");
$warn_1 = file_get_contents("data/$chat_id/warn/$from_id.txt");
$warn_ = file_get_contents("data/$cllchatid/warn/warn.txt");
$warn_2 = file_get_contents("data/$chat_id/warn/$re_id.txt");
$warn_3 = file_get_contents("data/$chat_id/warn/$re_id.txt");


$get = file_get_contents("https://api.telegram.org/bot"
.API_KEY."/getChatMember?chat_id=".$chat_id."&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$you_ = $info['result']['user']['id'];

$get_ = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$cllchatid&user_id=".$cllfor);
$info_ = json_decode($get_, true);
$you_ = $info_['result']['status'];
include "arabi.php";
include "persian.php";
include "english.php";
//====================the file by mounir======================//
$id_bot=bot("getme")->result->id;
$addition = $message->new_chat_member;
$additionbot = $update->message->new_chat_member;
if($addition and $addition->id == $id_bot){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
- اهلا بك في بوت حماية المجموعات الشبيه ببوت grop help ؛ 👥

- اضفني الى مجموعتك وقم برفعي مشرف ؛ 👨‍✈️

- بعدها ارسل { تفعيل } واتبع التعليمات التي ارسلها اليك ؛ 🈯️

- لاضهار اوامر البوت ارسل كلمة { الاوامر } داخل مجموعتك ؛ 🤖
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[['text' => "المطور", 'url' =>"https://t.me/hms_01"],['text' => "قناة البوت", 'url' =>"https://t.me/botatiiii"]],
[['text'=>"مشاركة البوت",'switch_inline_query'=>"هنا اكتب نص المشاركه للبوت"]],
]]) 
]); 
}
if($text == '/start'){
bot('sendmessage',[
'chat_id'=>$chat_id,
    'text'=>"
- [$name](tg://user?id=$from_id) ؛ 👮‍♂

- اهلا بك في بوت حماية المجموعات الشبيه ببوت grop help ؛ 👥

- اضفني الى مجموعتك وقم برفعي مشرف ؛ 👨‍✈️

- بعدها ارسل { تفعيل } واتبع التعليمات التي ارسلها اليك ؛ 🈯️

- لاضهار اوامر البوت ارسل كلمة { الاوامر } داخل مجموعتك ؛ 🤖

🇺🇸 Please select the appropriate language for you 🇺🇸
🇸🇦 من فضلك اختر اللغة المناسية لك 🇸🇦
🇮🇷 خوهشا زبان مورد نظر را انتخاب کنید 🇮🇷", 
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [
      ['text'=>"📊 احصائيات البوت",'callback_data'=>"memb99"]
	  ],
	 [
		['text'=>"🇸🇦العربية🇸🇦",'callback_data'=>"arabi"]
	  ],
	  [
		['text'=>"🇺🇸English🇺🇸",'callback_data'=>"english"]
	  ],
	  [
	 ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"persian"]
	  ]
		]
		])
  ]);
}

if($data == 'st'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"
- [$name](tg://user?id=$from_id) ؛ 👮‍♂

- اهلا بك في بوت حماية المجموعات الشبيه ببوت grop help ؛ 👥

- اضفني الى مجموعتك وقم برفعي مشرف ؛ 👨‍✈️

- بعدها ارسل { تفعيل } واتبع التعليمات التي ارسلها اليك ؛ 🈯️

- لاضهار اوامر البوت ارسل كلمة { الاوامر } داخل مجموعتك ؛ 🤖

🇺🇸 Please select the appropriate language for you 🇺🇸
🇸🇦 من فضلك اختر اللغة المناسية لك 🇸🇦
🇮🇷 خوهشا زبان مورد نظر را انتخاب کنید 🇮🇷", 
    'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
            [
      ['text'=>"📊 احصائيات البوت",'callback_data'=>"memb99"]
	  ],
	 [
		['text'=>"🇸🇦العربية🇸🇦",'callback_data'=>"arabi"]
	  ],
	  [
		['text'=>"🇺🇸English🇺🇸",'callback_data'=>"english"]
	  ],
	  [
	 ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"persian"]
	  ]
		]
		])
  ]);
}

if($text == "بوت"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ 👮‍♂

- اهلا بك في بوت حماية المجموعات الشبيه ببوت grop help ؛ 👥

- اضفني الى مجموعتك وقم برفعي مشرف ؛ 👨‍✈️

- بعدها ارسل { تفعيل } واتبع التعليمات التي ارسلها اليك ؛ 🈯️

- لاضهار اوامر البوت ارسل كلمة { الاوامر } داخل مجموعتك ؛ 🤖

🇺🇸 Please select the appropriate language for you 🇺🇸
🇸🇦 من فضلك اختر اللغة المناسية لك 🇸🇦
🇮🇷 خوهشا زبان مورد نظر را انتخاب کنید 🇮🇷", 
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
		['text'=>"🇸🇦العربية🇸🇦",'callback_data'=>"arabi"]
	  ],
	  [
		['text'=>"🇺🇸English🇺🇸",'callback_data'=>"english"]
	  ],
	  [
	 ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"persian"]
	  ]
		]
		])
  ]);
}

if($text == "bot"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ 👮‍♂

- Welcome to the group protection bot similar to the group help bot.  👥

 - Add me to your group and raise me as a moderator;  👨‍✈️

 - Then send {/add} and follow the instructions he sent to you;  🈯️

 - To display the bot’s commands, send the word {/help} within your group;  🤖

🇺🇸 Please select the appropriate language for you 🇺🇸
", 
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
      ['text'=>"📊Bot statistics",'callback_data'=>"memb99"]
	  ],
	 [
		['text'=>"🇸🇦العربية🇸🇦",'callback_data'=>"arabi"]
	  ],
	  [
		['text'=>"🇺🇸English🇺🇸",'callback_data'=>"english"]
	  ],
	  [
	 ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"persian"]
	  ]
		]
		])
  ]);
}
if($text == "ربات"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ 👮‍♂

- به ربات حفاظت گروهی مشابه ربات کمک گروه خوش آمدید.  👥

 - من را به گروه خود اضافه کنید و مرا به عنوان یک مدیر بزرگ کنید.  👨‍✈️

 - سپس {فعال} را ارسال کنید و دستورالعمل هایی را که برای شما ارسال کرده است دنبال کنید.  🈯️

 - برای نمایش دستورات ربات، کلمه {راهنما} را در گروه خود ارسال کنید.  🤖
🇮🇷 خوهشا زبان مورد نظر را انتخاب کنید 🇮🇷
", 
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
      ['text'=>"📊آمار ربات",'callback_data'=>"memb99"]
	  ],
	 [
		['text'=>"🇸🇦العربية🇸🇦",'callback_data'=>"arabi"]
	  ],
	  [
		['text'=>"🇺🇸English🇺🇸",'callback_data'=>"english"]
	  ],
	  [
	 ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"persian"]
	  ]
		]
		])
  ]);
}

if($data == 'arabi'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"بعض الاوامر التي تساعدك 💡
اختر ماتريده 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
     ['text'=>"اضفني الى مجموعتك ♣️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
     ],
    	[
     ['text'=>"مراسلة المطور 🚶", 'url'=>"t.me/botatiiii"]
     ],
     [
     ['text'=>"تغيير اللغة 🚠",'callback_data'=>"st"]
     ]
    ]    
    ])
    ]);
    }        
if($data == 'english'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"Some Orders help you 💡
Select would you want 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"Add me to your Gp ♣️️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
    ],
     [
     ['text'=>"support 💡", 'url'=>"t.me/botatiiii"]
     ],
     [
     ['text'=>"setlang  🚠",'callback_data'=>"st"]
     ]
    ]
    ])
    ]);
    }     // by @hms_01
if($data == 'persian'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"توصیه هایی که کمکتان خواهد کرد 🍁
یکی را انتخاب کنید 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"افزودن من به گروه ♣️️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
    ],
     [
     ['text'=>"پشتیبانی 💡", 'url'=>"t.me/botatiiii"]
     ],
     [
     ['text'=>"انتخاب زبان 🚠",'callback_data'=>"st"]
     ]
    ]
    ])
    ]);
    }
  
if ($text && $type == "supergroup" ){
$newmessg = $allmsg + 1;
file_put_contents("data/allmsg.txt","$newmessg");
}
if ($text && $type == "private" ){
$newmessg = $allmsgpv + 1;
file_put_contents("data/allmsgpv.txt","$newmessg");
}
if( !$fwd && $type == "supergroup" && $menglish1 == "❌" && $you != "creator" && $you != "administrator"  && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)(.*)|(.*)(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)|(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)(.*)/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if( !$fwd && $type == "supergroup" && $marabi1 == "❌"&& $you != "administrator" && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)|(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)|(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if( !$fwd && $type == "supergroup" && $mpersian1== "❌" && $you != "administrator" && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)|(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)|(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }

 if($photo  && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $photo1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
elseif($update->edited_message && $you != "creator" && $you != "administrator" && $from_id != $sudo){
if($edit123 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id
]);
} }

 if($number > 1000 or $numper > 1000 && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $long_list1 == "❌"){
 bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}


if($voice   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $voice1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($audio   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $audio1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($video   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $video1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
 if( !$fwd && $type == "supergroup" && $link1 == "❌" && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
 if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
 if( !$fwd && $type == "supergroup" && $tag1 == "❌" && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if($doc   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $doc1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}

if($doc   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $gif1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}

if($game   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $game1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($text && $you != "creator" && $you != "administrator" && $from_id != $sudo && $from_id != $sudo && in_array($from_id, $super_silent)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($sticker   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $sticker1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
elseif($update->message->forward_from && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
if( $fwd1 == "❌"){
	bot('deleteMessage',[
 'chat_id'=>$chat_id,
'message_id'=>$message->message_id
   ]);
	}
	}
if($text   && $you != "creator" && $you != "administrator" && $from_id != $sudo && $type == "supergroup" && $text1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($you == "creator" or $you == "administrator") {
if($re  &&  $text == "/del" ){
bot('deleteMessage',[
'chat_id'=>$re_chatid,
'message_id'=>$re_msgid
]);
}
}


$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$msgid = $message->message_id;
$data = $update->callback_query->data;
//--------------
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=$from_id");
$info = json_decode($get, true);
$you = $info['result']['status'];
//==================
if (strpos($text,"مس") !== false ) {
if($you == "creator" || $you == "administrator" ) {
$dlis = str_replace("مس",$text); 
$dlis = (int)$dlis;
$msgnun = $msgid;
$msgnun = $msgnun-1;
$mdgto = $msgnun -$dlis;
for($i=$msgnun+10;$i>$mdgto;$i--)
  bot('deleteMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$i
]);  

}
}

$hmos1 = $name;
$hmhm = 916165019 ;
$from_id = $message->from->id; 
if($text == "غادر" and $from_id == $hmhm){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"حاظر عزيزي المطور 🖤👩‍🦯👩‍🦯
$hmos1",
'reply_to_message_id'=>$message->message_id,
]);
bot('leaveChat',[
'chat_id'=>$chat_id,
]);
}elseif($text == غادر and $from_id != $hmhm) {
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"عزيزي | $hmos1 
الامر للمطور فقط ⚠️", 'reply_to_message_id'=>$message->message_id,
]) ;
}


unlink("error_log");
