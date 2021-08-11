<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="slider-wrap" style="height: 83vh;">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul class="bg_hero">
                <li class="bg_app">
                    <!-- MAIN IMAGE -->
                    <!-- <img src="#" alt="2"> -->
                    <div class="dg1">
                        welcom to <br>
                        <span style="color:#590000; text-shadow: 3px 3px rgb(31 45 61 / 40%);">appear</span>
                        <p style="margin-top:30px; font-size:16px; font-weight:700;">
                            APPEAR은 사용자의 니즈에 최적화된 상품으로 포트폴리오를 구성, 추천하는 시스템으로<br>사용자의 투자금을 최대한 보호하면서 최대한의 보상을 추구하는것을 목표로
                            합니다.
                        </p>
                    </div>
                </li>
                <!-- SLIDE  -->
            </ul>
        </div>
    </div>
</div>

<!-- INNER CONTENT -->

<div class="container-fluid no-padding">
    <div class="pattern-grey padding30">
        <div class="container">
            <div class="row cta-dark">
                <div class="col-md-9">
                    <h2 style="color: #000"><span>WHITE PAPER</span></h2>
                    <p class="">DeFi의 선두주자 APPEAR의 백서에서 다양한 내용을 확인해보세요.</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="button btn-lg pull-right">Download</a>
                </div>
            </div>
        </div>
    </div>
    <div class="padding50">
        <div class="" id="1"></div>
        <section id="about-section2">
            <div class="container">
                <div class="welcome-content text-center">
                    <h3>WHO WE ARE</h3>
                    <p class="lead" style="min-width:400px; width:60%; margin:0 auto; word-break:keep-all;">지난 암호화폐의 거대
                        상승 이후, 전체 암호화폐 시장은 2년이 넘는 하락장을 맞이하고 있다. 그럼에도 불구하고 블록체인 업계는 새로운 아이디어와 기술혁신으로 진화 하고 있다.</p>
                </div>
            </div>


            <div class="space10"></div>
            <div class="container padding50">
                <div class="services">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="service-content text-center">
                                <img src="<?php echo G5_IMG_URL?>/i1.png" alt="">
                                <div class="services-content">
                                    <h2>오픈소스 소프트웨어를 활용한 탈중앙화 금융 서비스</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-content text-center">
                            <img src="<?php echo G5_IMG_URL?>/i2.png" alt="">
                                <div class="services-content">
                                    <h2>스마트 컨트랙트를 사용하여 진행하는 ICO</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-content text-center">
                            <img src="<?php echo G5_IMG_URL?>/i4.png" alt="">
                                <div class="services-content">
                                    <h2>누구나 참여 가능한 경제 시스템을 지향</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-content text-center">
                            <img src="<?php echo G5_IMG_URL?>/i3.png" alt="">
                                <div class="services-content">
                                    <h2>공용 블록체인상의 상호 운용 가능한 DeFi 애플리케이션 위에 구축된 모듈식 프레임워크</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="welcome-content text-center">
                    <p class="lead" style="min-width:400px; width:60%; margin:0 auto; word-break:keep-all;">디파이는 이를 해결하기
                        위해서 탄생하였고 탈중앙성과 신뢰를 바탕으로 작동합니다. 아직 성능적인 부분에선 개선해야 할 부분이 많지만, 탈중앙성을 바탕으로 한 다양한 장점을 갖고 있습니다.</p>
                </div>
            </div>
        </section>

    </div>
</div>

<div class="space70"></div>
<div class="parallax-bg5 padding30" id="4">


<div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="white">DeFi의 상태</h2>
            <p class="white">탈 중앙화 금융 (DeFi)의 현재 상태는 범용 블록 체인으로 채워지며, 대부분은 체인에서 스마트 계약 개발을위한 튜링 완전한 명령 세트를 제공합니다. 많은
                프로그래밍 언어에 적합하지만, 튜링 완전 스마트 계약 언어에 대한 독단적 인 추구는 블록 체인의 확장 성, 보안 및 견고성에 관한 다양한 문제를 초래했습니다.</p>
        </div>
        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fc-main">
                            <div class="feature-content space50">
                                <i class="fa fa-hdd-o"></i>
                                <div class="fc-inner">
                                    <p class="lite-white">Ethereum, EOS 및 TRON과 같은 네트워크에있는 엄청난 양의 dApp은 네트워크의 다른 dApp에
                                        잠재적 (또는 입증 된) 영향을 미칩니다.</p>
                                </div>
                            </div>
                            <div class="feature-content space50">
                                <i class="icon-pencil2"></i>
                                <div class="fc-inner">
                                    <p class="lite-white">심각한 금융 유형의 dApp의 경우 네트워크가 책임감 있고 안전한 방식으로 유지 및 관리되고 있음을 아는 것이
                                        중요합니다. 게임, 도박 및 기타 덜 '미션 크리티컬' 앱으로 가득 찬 블록 체인을 갖는 것은 궁극적으로 블록 체인의 개발과 방향에 영향을 미칠
                                        것입니다.</p>
                                </div>
                            </div>
                            <div class="feature-content space50">
                                <i class="icon-user"></i>
                                <div class="fc-inner">
                                    <p class="lite-white">
                                        Turing-complete 명령 세트를 사용하려면 프로그래머가 모든 종류의 앱을 개발하기 위해 복잡한 프로그램을 만들어야합니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="<?php echo G5_IMG_URL?>/defi.png" class="img-responsive" alt=""
                                style="width:400px; text-align:center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="white">APPEAR와 DeFi</h2>
            <p class="white">2018년 후반부터 전세계적으로 수백개의 디파이 서비스 들이 늘어나게 되었으며 랜딩, 스테이킹, 탈중앙화거래소, 파생상품, 지갑, 신원확인, 예측시장, 보험 등
                다양한 분야에서 활용이 되어지고 있다. 이제까지 여러 기업에서 다양한 dApp들을 선보여 시장에 내놓았지만 실질적으로 적용이 가능한 분야는 많지 않았지만 디파이는 금융서비스 시스템의
                근본적인 비효율성을 개선하여 블록체인 업계의 많은 호응을 얻게 되었고 블록체인을 이해하고 있는 사용자층이 대거 유입됨으로 단기간에 급성장하게 되었다.</p>
        </div>
        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <img src="<?php echo G5_IMG_URL?>/app_sb.png" class="img-responsive" alt=""
                                style="width:400px; text-align:center">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fc-main">
                            <div class="feature-content space50">
                                <i class="fa fa-hdd-o"></i>
                                <div class="fc-inner">
                                    <p class="lite-white">APPEAR는 기존 디파이 시스템을 업그레이드 하기로 하고 첫번째 플랫폼으로 전통적인 은행서비스와 유사한 이자
                                        예금 및 이익 창출이라는 기능이 있다. 이 서비스를 통하여 사용자는 암호화폐 자산을 상대적으로 안전하게 입금하고 수익을 얻을수 있으며 세계
                                        누구라도 이용할수 있는 효율성 높은 디파이 금융상품이다.</p>
                                </div>
                            </div>
                            <div class="feature-content space50">
                                <i class="icon-pencil2"></i>
                                <div class="fc-inner">
                                    <p class="lite-white">과거 금융서비스 플랫폼을 이용하고자 하는 사용자는 브랜드의 인지도, 수익률 변경, 보안 등 여러가지 요소를
                                        고려하여 반복적인 비교를 해왔다. 또한 대부분 이성적인 사용자는 동시에 여러 플랫폼에 암호화폐를 보관하여 리스크를 줄이고자 했다.</p>
                                </div>
                            </div>
                            <div class="feature-content space50">
                                <i class="icon-user"></i>
                                <div class="fc-inner">
                                    <p class="lite-white">APPEAR 플랫폼은 사용자에게 지능적인 포트폴리오를 추천할수 있도록 도와주며 디파이영역에서 진정한 지능형
                                        투자자문 및 관리 플랫폼을 구축한다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="clearfix"></div>
<div class="padding80 border-top">
    <div class="container" id="2">
        <div class="col-md-8 col-md-offset-2 text-center space50">
            <h2>WHY DEFI?</h2>
            <p>ADVANTAGES OF DEFI</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="icon-monitor"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4>무허가성</h4>
                        <p>금융서비스 시스템에 누구나 참여할수 있도록 하는 환경을 의미하는게 무허가성이라고 지칭 한다. 현 금융서비스 시스템은 매우 폐쇄적으로 일부 금융상품을 가입하기 위해서는 특정한 자격요건을 요구하는경우가 많다. 전 세계적으로 약 17억명의 성인 남녀가 은행계좌를 가지고 있지 않다고 한다. 이는 전세계 인구의 20% 정도를 차지하고 있다.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="icon-paper"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4>투명성</h4>
                        <p>디파이 시스템에서는 모든 거래의 내역이 블록체인상에 공개가 되며 저장이 되지만 그 거래의 내역이 누구의 거래인지 알수가 없도록 되어있다. 거래의 투명성이 보장이 된다.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="icon-server"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4>탈중앙성</h4>
                        <p>탈중앙성은 안전성에서도 중요하게 작용을 하는데 중앙 주체의 테이터 베이스가 아닌 세계 각국의 노드에 의해 시스템이 운영하기에 해킹이나 시스템 셧다운이라는 위험에서 안전할수 있다.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="space20"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="icon-reload"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4>효율성</h4>
                        <p>현 금융권에서 국가간 송금의 수수료는 약 5% 이상을 부과하지만 디파이 시스템에서는 1~2% 미만의 낮은 수수료가 책정이 된다. 전송 속도 측면에서도 디파이시스템은 탁월한 효율성을 가지고 있다. 예로 은행을 통한 국가간 송금은 1~2일 정도 소요가 되지만 디파이 시스템에서는 보통의 경우 10분 이내 모든 거래가 종료된다. 언제 어디서나 자유롭고 간편하게 금융서비스를 할 수가 있다.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="icon-locked"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4>개인정보보호</h4>
                        <p>디파이 시스템에서는 원하는 수준의 개인정보를 원하는 상대방에게 선택적으로 공개할수 있도록 되어 있다. 오늘날 개인정보의 수준은 단순 프라이버시 차원에서 생각할 문제를 넘어섰다. 세계 데이터 시장은 약 250조원 규모로 성장을 했으며 개인정보의 상품화는 꾸준히 가속화 될것으로 보인다.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="icon-cog3"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4>검열저항성</h4>
                        <p>특정한 사용자에 의해 운영이 되는것이 아니라 사용자 모두가 시스템을 이루고 있기 때문에 개인의 완전한 자산 소유권을 보장할수있다.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="space20"></div>

    </div>
</div>



<div class="pattern-grey">
    <div id="stats1" class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="stats1-info">
                    <i class=" icon-server"></i>
                    <p><span class="count count1">500</span>M $</p>
                    <h2>DeFi 프로토콜에 고정된 총 가치</h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stats1-info">
                    <i class="icon-wallet"></i>
                    <p><span class="count count1">1500</span>M $</p>
                    <h2>2020년 말 DeFi의 총 가치</h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stats1-info">
                    <i class="icon-bargraph"></i>
                    <p><span class="count count1">2</span>%</p>
                    <h2>공급량의 2%가 DeFi 프로토콜에 고정</h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stats1-info">
                    <i class="icon-user"></i>
                    <p><span class="count count1">1</span>M 명</p>
                    <h2>DeFi를 사용하는 사람</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container padding70">
    <div class="section-info ">
        <div class="col-md-6">
            <h4>BUDGET DISTRIBUTION</h4>
            <div class="space30"></div>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseOne1">
                                Platform
                                <span class="fa fa-plus"></span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The success or failure of the platform is not only accomplished by successful platform
                                development but also by the best platform operation. The APPEAR team will be used for
                                the operation team and the service team for smooth and pleasant operation. We will do
                                our best to expedite the platform's interest payments.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix space10"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo1">
                                Development
                                <span class="fa fa-plus"></span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The APPEAR team will use the funds raised for the platform development and maintenance,
                                production, development and design team's labor costs.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix space10"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseThree1">
                                Marketing
                                <span class="fa fa-plus"></span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>APPEAR will be used for public relations, marketing and partnership activities with
                                partner foundations and companies to promote global awareness.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix space10"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseFour1">
                                Administrative expenses
                                <span class="fa fa-plus"></span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>To run the APPEAR Foundation ethically, it requires compliance with laws, duties of tax
                                collection, and a clear disclosure of the company's management situation. Therefore,
                                APPEAR will use legal, tax and accounting services as administrative expenses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4>GRAPE</h4>
            <div class="space30"></div>
            <div id="skills">
                <div class="b-progress-bar" data-capacity="100" data-value="40">
                    <div class="progress-label">Platform - 40%</div>
                    <div class="progress-scale">
                        <div style="width: 40%;" class="progress-line"></div>
                    </div>
                </div>
                <div class="b-progress-bar" data-capacity="100" data-value="30">
                    <div class="progress-label">Development - 30%</div>
                    <div class="progress-scale">
                        <div style="width: 30%;" class="progress-line m-2"></div>
                    </div>
                </div>
                <div class="b-progress-bar" data-capacity="100" data-value="20">
                    <div class="progress-label">Marketing - 20%</div>
                    <div class="progress-scale">
                        <div style="width: 20%;" class="progress-line m-3"></div>
                    </div>
                </div>
                <div class="b-progress-bar" data-capacity="100" data-value="10">
                    <div class="progress-label">Administrative expenses - 10%</div>
                    <div class="progress-scale">
                        <div style="width: 10%;" class="progress-line m-4"></div>
                    </div>
                </div>
            </div>
            <div class="gap" style="height: 20px;">
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>



<div class="space80"></div>
<div class="container">
    <div class="row">
        <div class="cta-default-bdr">
            <div class="col-md-9">
                <p style="word-break:keep-all;">APPEAR와 DeFi의 관계, DeFi에 대해 자세하게 알아보고 싶으시면, 백서를 다운로드하여 확인해보세요.</p>
            </div>
            <div class="col-md-3">
                <a href="#" class="button btn-lg btn-border color2 pull-right">DOWNLOAD</a>
            </div>
        </div>
    </div>
</div>


<div class="padding50">

			<div class="container padding40">

				<div class="team-home">
					<div class="text-center space40">
						<h2 class="title uppercase">APPEAR Team</h2>
					</div>
					<div class="team-box">
						<div class="container">
							<div id="home-team" class="owl-carousel owl-theme">
								<div class="item">
									<div class="staff-img">
										<img src="<?php echo G5_IMG_URL?>/team/1.jpg" class="img-responsive" alt="">
									</div>
									<h2>Deidre Lyn</h2>
									<span>Founder</span>
								</div>
								<div class="item">
									<div class="staff-img">
										<img src="<?php echo G5_IMG_URL?>/team/2.jpg" class="img-responsive" alt="">
									</div>
									<h2>Maud Elfreda</h2>
									<span>Marketing Expert</span>
								</div>
								<div class="item">
									<div class="staff-img">
										<img src="<?php echo G5_IMG_URL?>/team/3.jpg" class="img-responsive" alt="">
									</div>
									<h2>Aliah Xavier</h2>
									<span>Director</span>
								</div>
								<div class="item">
									<div class="staff-img">
										<img src="<?php echo G5_IMG_URL?>/team/4.jpg" class="img-responsive" alt="">
									</div>
									<h2>Pamila Paden</h2>
									<span>Operations</span>
								</div>
								<div class="item">
									<div class="staff-img">
										<img src="<?php echo G5_IMG_URL?>/team/5.jpg" class="img-responsive" alt="">
									</div>
									<h2>Janice Annika</h2>
									<span>Designer</span>
								</div>
								<div class="item">
									<div class="staff-img">
										<img src="<?php echo G5_IMG_URL?>/team/6.jpg" class="img-responsive" alt="">
									</div>
									<h2>Hank Justy</h2>
									<span>Developer</span>
								</div>
								<div class="item">
									<div class="staff-img">
										<img src="<?php echo G5_IMG_URL?>/team/7.jpg" class="img-responsive" alt="">
									</div>
									<h2>Jules Arron</h2>
									<span>UX Designer</span>
								</div>
								<div class="item">
									<div class="staff-img">
										<img src="<?php echo G5_IMG_URL?>/team/8.jpg" class="img-responsive" alt="">
									</div>
									<h2>Jacklyn Mel</h2>
									<span>Support</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

<div class="border-top padding80">
    <div class="container home-blog" id="5">
        <div class="text-center space40">
            <h2 class="title uppercase">APPEAR NEWS</h2>
            <p>APPEAR의 다양한 소식을 전해드립니다.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="hb-info">
                    <div class="hb-thumb">
                        <img src="<?php echo G5_IMG_URL?>/blog/1.jpg" class="img-responsive" alt="" />
                    </div>
                    <h4><a href="blog-single.html">Climb the mountain</a></h4>
                    <small><i class="fa fa-user"></i> by Admin</small> <small><i class="fa fa-comments"></i> 20
                        Comments</small> <small><i class="fa fa-calendar"></i> 8/28/2015</small>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat mi tellus,
                        euismod viverra dolor ultrices sit amet.</p>
                    <a href="blog-single.html" class="button btn-small btn-border color2">Read more...</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hb-info">
                    <div class="hb-thumb">
                        <img src="<?php echo G5_IMG_URL?>/blog/2.jpg" class="img-responsive" alt="" />
                    </div>
                    <h4><a href="blog-single.html">Girl showing stats</a></h4>
                    <small><i class="fa fa-user"></i> by Admin</small> <small><i class="fa fa-comments"></i> 20
                        Comments</small> <small><i class="fa fa-calendar"></i> 8/28/2015</small>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat mi tellus,
                        euismod viverra dolor ultrices sit amet.</p>
                    <a href="blog-single.html" class="button btn-small btn-border color2">Read more...</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hb-info">
                    <div class="hb-thumb">
                        <img src="<?php echo G5_IMG_URL?>/blog/3.jpg" class="img-responsive" alt="" />
                    </div>
                    <h4><a href="blog-single.html">A photographers heart</a></h4>
                    <small><i class="fa fa-user"></i> by Admin</small> <small><i class="fa fa-comments"></i> 20
                        Comments</small> <small><i class="fa fa-calendar"></i> 8/28/2015</small>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat mi tellus,
                        euismod viverra dolor ultrices sit amet.</p>
                    <a href="blog-single.html" class="button btn-small btn-border color2">Read more...</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!--Pricing Table start -->


<div class="container padding50" id="7">

    <div class="text-center">
        <h2 class="title uppercase">APPEAR PLAN</h2>
        <p>APPEAR STAKING PLATFORM을 이용해보세요.</p>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="wpb_wrapper">
            <div class="pricing-table">
                <div class="price-unit">
                    <span class="pricing">$20</span>
                    <span class="unit">pm</span>
                </div>
                <h3>Basic Plan</h3>
                <p></p>
                <ul class="content-pricing">
                    <li>10GB Storage Space</li>
                    <li>50GB Bandwidth</li>
                    <li>10 Free Sub-Domains</li>
                    <li>100 E-mail Accounts</li>
                    <li>Control Panel &amp; FTP</li>
                </ul>
                <p>
                    <a class="pricing-button" href="#">GET STARTED</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="wpb_wrapper">
            <div class="pricing-table">
                <div class="price-unit">
                    <span class="pricing">$30</span>
                    <span class="unit">pm</span>
                </div>
                <h3>Premium Plan</h3>
                <p></p>
                <ul class="content-pricing">
                    <li>10GB Storage Space</li>
                    <li>50GB Bandwidth</li>
                    <li>10 Free Sub-Domains</li>
                    <li>100 E-mail Accounts</li>
                    <li>Control Panel &amp; FTP</li>
                </ul>
                <p>
                    <a class="pricing-button" href="#">GET STARTED</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="wpb_wrapper">
            <div class="pricing-table active">
                <div class="price-unit">
                    <span class="pricing">$50</span>
                    <span class="unit">pm</span>
                </div>
                <h3>ADVANCE PLAN</h3>
                <p></p>
                <ul class="content-pricing">
                    <li>10GB Storage Space</li>
                    <li>50GB Bandwidth</li>
                    <li>10 Free Sub-Domains</li>
                    <li>100 E-mail Accounts</li>
                    <li>Control Panel &amp; FTP</li>
                </ul>
                <p>
                    <a class="pricing-button" href="#">GET STARTED</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="wpb_wrapper">
            <div class="pricing-table">
                <div class="price-unit">
                    <span class="pricing">$70</span>
                    <span class="unit">pm</span>
                </div>
                <h3>SUPER PLAN</h3>
                <p></p>
                <ul class="content-pricing">
                    <li>10GB Storage Space</li>
                    <li>50GB Bandwidth</li>
                    <li>10 Free Sub-Domains</li>
                    <li>100 E-mail Accounts</li>
                    <li>Control Panel &amp; FTP</li>
                </ul>
                <p>
                    <a class="pricing-button" href="#">GET STARTED</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>