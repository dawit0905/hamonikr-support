﻿
# README #

* 해당 프로젝트는 EX로 제작된 하모니카 OS 원격 기술지원을 위한 라이선스 구매 사이트 입니다.
* 원격 기술지원 요청 및 라이선스 등록은 해당 사이트가 아닌 기술지원 서비스 앱에서 가능합니다.
<br/>
<br/>

#### fnt 폴더의 스크립트를 앱에서 사용합니다. 
#### modules 폴더의 파일을 일부 수정하였습니다.
<br/>
<br/>

## 라이선스 발급 과정은 다음과 같습니다.
* 라이선스 구매(사용자) -> 관리자페이지(관리자) -> 결제관리(관리자) -> 결제목록에 있는 해당 결제내역의 상태를 완료로 변경 -> 라이선스 발급
<br/>
<br/>

## 라이선스 확인 및 등록 과정은 다음과 같습니다.
* 앱 실행후 로그인 -> 결제내역 확인 클릭 -> 목록에서 해당 라이선스를 확인 -> 라이선스 등록창에서 해당 라이선스 등록
<br/>
<br/>

### 라이선스 종류 추가하는 경우
* 상품명 마지막에 (n개월) 로 작성 바랍니다.
* EX) Subscription ABC (7개월) -> data-val="Subscription ABC (7개월)" 의 값을 읽어들여 7 개월로 받아들입니다.



