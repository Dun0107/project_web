<?php
	include ("memu2.php");
?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
<div class="col-md-10 p-lg-5 mx-auto my-5">
  
  <h1 class="display-7 font-weight-normal" style="font-family:Georgia, 'Times New Roman', Times, serif" >Internet</h1><br>
    <hr>
    <div class="form-group row">
    <button type="button" class="btn btn-secondary col-sm-2 col-form-label" style="background-color: #0B2161">자동 감지</button>
    </div>
  <div class="form-group row">

    <label  class="col-sm-2 col-form-label">인터넷 연결 유형:</label>
    
    <button type="button" class="btn btn-outline-secondary" >동적</button>&nbsp;
      <button type="button" class="btn btn-outline-secondary">고정</button>&nbsp;
      <button type="button" class="btn btn-outline-secondary">BigPond 케이블</button>&nbsp;
      
      <button type="button" class="btn btn-outline-secondary">PPPoE</button>&nbsp;
      
      <button type="button" class="btn btn-outline-secondary">L2TP</button>&nbsp;
     
      <button type="button" class="btn btn-outline-secondary">PPTP</button>
      </div>
      
      <div class="form-group row">
      <label  class="col-sm-2 col-form-label">MAC 주소 복제:</label>
      
      <button type="button" class="btn btn-outline-secondary">YES</button>
      &nbsp;
      <button type="button" class="btn btn-outline-secondary">NO</button>
      
      
      </div>
      <br><br>
      <div class="form-group row">
          <p class="col-sm-100 col-form-label"> * 주의: 만일 사용자가 연결 유형을 잘 모른다면 감지 버튼을 클릭하십시오. 사용자의 ISP가 제공하는 연결을 확실하게 확인하려면 인터넷 회선 제공업체에 문의하십시오</p></div>
      <br><br><br>
      <button type="button" class="btn btn-dark" style="background-color: #0B2161">저장</button>
      <br><br><br>
  </div> </div>