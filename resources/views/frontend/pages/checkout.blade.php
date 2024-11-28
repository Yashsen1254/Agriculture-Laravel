@extends('frontend.layout.main');

@section('content')
<body>
	<!-- Section Headline -->
	<div class="section text-center">
		<div class="container">
			<!-- Headline -->
			<div class="headline">
				<h1 class="headline_title">Checkout</h1>
				<p class="headline_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<!-- Headline End -->
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<a class="breadcrumb_link" href="home-1.html">
					<span class="breadcrumb_link_text">Home</span>
					<span class="breadcrumb_link_icon icon is-arrow-right2"></span>
				</a>
				<span class="breadcrumb_active">Checkout</span>
			</div>
			<!-- Breadcrumb End -->
		</div>
	</div>
	<!-- Section Headline End -->
	<!-- Section Checkout -->
	<div class="section">
		<div class="container">
			<div class="shop-checkout" data-ntr-shop-checkout>
				<form class="shop-checkout_coupon">
					<div class="shop-checkout_coupon_message">
						<p>Have a coupon? <a href="#">Click here to enter your code</a></p>
					</div>
					<div class="shop-checkout_coupon_code">
						<div class="shop-checkout_coupon_code_inner">
							<input class="form_control_input" type="text" name="coupon_code" placeholder="Enter coupon code ..." required>
							<button class="button is-grey" type="submit" name="apply_coupon">
								<span class="button_text">Apply Coupon</span>
							</button>
						</div>
					</div>
				</form>
				<form class="shop-checkout_form">
					<div class="grid">
						<div class="grid_row is-60">
							<div class="grid_col is-12 is-lg-6">
								<div class="grid">
									<div class="grid_row is-30">
										<div class="grid_col is-12">
											<h3 class="shop-checkout_title">Billing details</h3>
										</div>
										<div class="grid_col is-12 is-sm-6">
											<label class="form_label">First name <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="billing_first_name" placeholder="Enter first name ..." required>
										</div>
										<div class="grid_col is-12 is-sm-6">
											<label class="form_label">Last name <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="billing_last_name" placeholder="Enter last name ..." required>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Company name</label>
											<input class="form_control_input" type="text" name="billing_company" placeholder="Enter company name ...">
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Country <span class="form_label_require">*</span></label>
											<select class="form_control_select" name="billing_country">
												<option value="">Select a country…</option>
												<option value="AX">Åland Islands</option>
												<option value="AF">Afghanistan</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AS">American Samoa</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AQ">Antarctica</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="PW">Belau</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BO">Bolivia</option>
												<option value="BQ">Bonaire, Saint Eustatius and Saba</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BW">Botswana</option>
												<option value="BV">Bouvet Island</option>
												<option value="BR">Brazil</option>
												<option value="IO">British Indian Ocean Territory</option>
												<option value="VG">British Virgin Islands</option>
												<option value="BN">Brunei</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CF">Central African Republic</option>
												<option value="TD">Chad</option>
												<option value="CL">Chile</option>
												<option value="CN">China</option>
												<option value="CX">Christmas Island</option>
												<option value="CC">Cocos (Keeling) Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CG">Congo (Brazzaville)</option>
												<option value="CD">Congo (Kinshasa)</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CW">Curaçao</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="SV">El Salvador</option>
												<option value="GQ">Equatorial Guinea</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FK">Falkland Islands</option>
												<option value="FO">Faroe Islands</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="GF">French Guiana</option>
												<option value="PF">French Polynesia</option>
												<option value="TF">French Southern Territories</option>
												<option value="GA">Gabon</option>
												<option value="GM">Gambia</option>
												<option value="GE">Georgia</option>
												<option value="DE">Germany</option>
												<option value="GH">Ghana</option>
												<option value="GI">Gibraltar</option>
												<option value="GR">Greece</option>
												<option value="GL">Greenland</option>
												<option value="GD">Grenada</option>
												<option value="GP">Guadeloupe</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GG">Guernsey</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="GY">Guyana</option>
												<option value="HT">Haiti</option>
												<option value="HM">Heard Island and McDonald Islands</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="IR">Iran</option>
												<option value="IQ">Iraq</option>
												<option value="IE">Ireland</option>
												<option value="IM">Isle of Man</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="CI">Ivory Coast</option>
												<option value="JM">Jamaica</option>
												<option value="JP">Japan</option>
												<option value="JE">Jersey</option>
												<option value="JO">Jordan</option>
												<option value="KZ">Kazakhstan</option>
												<option value="KE">Kenya</option>
												<option value="KI">Kiribati</option>
												<option value="KW">Kuwait</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="LA">Laos</option>
												<option value="LV">Latvia</option>
												<option value="LB">Lebanon</option>
												<option value="LS">Lesotho</option>
												<option value="LR">Liberia</option>
												<option value="LY">Libya</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MO">Macao S.A.R., China</option>
												<option value="MK">Macedonia</option>
												<option value="MG">Madagascar</option>
												<option value="MW">Malawi</option>
												<option value="MY">Malaysia</option>
												<option value="MV">Maldives</option>
												<option value="ML">Mali</option>
												<option value="MT">Malta</option>
												<option value="MH">Marshall Islands</option>
												<option value="MQ">Martinique</option>
												<option value="MR">Mauritania</option>
												<option value="MU">Mauritius</option>
												<option value="YT">Mayotte</option>
												<option value="MX">Mexico</option>
												<option value="FM">Micronesia</option>
												<option value="MD">Moldova</option>
												<option value="MC">Monaco</option>
												<option value="MN">Mongolia</option>
												<option value="ME">Montenegro</option>
												<option value="MS">Montserrat</option>
												<option value="MA">Morocco</option>
												<option value="MZ">Mozambique</option>
												<option value="MM">Myanmar</option>
												<option value="NA">Namibia</option>
												<option value="NR">Nauru</option>
												<option value="NP">Nepal</option>
												<option value="NL">Netherlands</option>
												<option value="NC">New Caledonia</option>
												<option value="NZ">New Zealand</option>
												<option value="NI">Nicaragua</option>
												<option value="NE">Niger</option>
												<option value="NG">Nigeria</option>
												<option value="NU">Niue</option>
												<option value="NF">Norfolk Island</option>
												<option value="KP">North Korea</option>
												<option value="MP">Northern Mariana Islands</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PS">Palestinian Territory</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PN">Pitcairn</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RE">Reunion</option>
												<option value="RO">Romania</option>
												<option value="RU">Russia</option>
												<option value="RW">Rwanda</option>
												<option value="ST">São Tomé and Príncipe</option>
												<option value="BL">Saint Barthélemy</option>
												<option value="SH">Saint Helena</option>
												<option value="KN">Saint Kitts and Nevis</option>
												<option value="LC">Saint Lucia</option>
												<option value="SX">Saint Martin (Dutch part)</option>
												<option value="MF">Saint Martin (French part)</option>
												<option value="PM">Saint Pierre and Miquelon</option>
												<option value="VC">Saint Vincent and the Grenadines</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="RS">Serbia</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="GS">South Georgia/Sandwich Islands</option>
												<option value="KR">South Korea</option>
												<option value="SS">South Sudan</option>
												<option value="ES">Spain</option>
												<option value="LK">Sri Lanka</option>
												<option value="SD">Sudan</option>
												<option value="SR">Suriname</option>
												<option value="SJ">Svalbard and Jan Mayen</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="SY">Syria</option>
												<option value="TW">Taiwan</option>
												<option value="TJ">Tajikistan</option>
												<option value="TZ">Tanzania</option>
												<option value="TH">Thailand</option>
												<option value="TL">Timor-Leste</option>
												<option value="TG">Togo</option>
												<option value="TK">Tokelau</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB" selected>United Kingdom (UK)</option>
												<option value="US">United States (US)</option>
												<option value="UM">United States (US) Minor Outlying Islands</option>
												<option value="VI">United States (US) Virgin Islands</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VU">Vanuatu</option>
												<option value="VA">Vatican</option>
												<option value="VE">Venezuela</option>
												<option value="VN">Vietnam</option>
												<option value="WF">Wallis and Futuna</option>
												<option value="EH">Western Sahara</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Street address <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="billing_address_1" placeholder="Enter street address ..." required>
										</div>
										<div class="grid_col is-12">
											<input class="form_control_input" type="text" name="billing_address_2" placeholder="Enter apartment, suite, unit etc. (optional) ...">
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Town / City <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="billing_city" placeholder="Enter town / city ..." required>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">State / County <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="billing_state" placeholder="Enter state / county ..." required>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Postcode / ZIP <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="billing_postcode" placeholder="Enter postcode / zip ..." required>
										</div>
										<div class="grid_col is-12 is-sm-6">
											<label class="form_label">Phone <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="tel" name="billing_phone" placeholder="Enter phone ..." required>
										</div>
										<div class="grid_col is-12 is-sm-6">
											<label class="form_label">Email address <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="email" name="billing_email" placeholder="Enter email address ..." required>
										</div>
										<div class="grid_col is-12">
											<h3 class="shop-checkout_title">Additional information</h3>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Order notes</label>
											<textarea class="form_control_textarea" name="order_comments" cols="30" rows="10" placeholder="Enter notes about your order, e.g. special notes for delivery ..."></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="grid_col is-12 is-lg-6">
								<h3 class="shop-checkout_title">Your order</h3>
								<table class="shop-checkout_products">
									<tbody>
										<tr class="shop-checkout_products_item">
											<td>
												<a class="shop-checkout_products_item_name" href="shop-single-1.html">Organic D'Anjou Lemon</a>
												<span class="shop-checkout_products_item_qty">(1x)</span>
												<span class="shop-checkout_products_item_attributes">Weight: 1kg, Dimensions: 10 × 10 × 30 cm</span>
											</td>
											<td class="text-right">$6.40</td>
										</tr>
										<tr class="shop-checkout_products_item">
											<td>
												<a class="shop-checkout_products_item_name" href="shop-single-1.html">Organic D'Anjou Tomato</a>
												<span class="shop-checkout_products_item_qty">(1x)</span>
												<span class="shop-checkout_products_item_attributes">Weight: 1kg, Dimensions: 10 × 10 × 30 cm</span>
											</td>
											<td class="text-right">$7.20</td>
										</tr>
										<tr class="shop-checkout_products_item">
											<td>
												<a class="shop-checkout_products_item_name" href="shop-single-1.html">Organic D'Anjou Lettuce</a>
												<span class="shop-checkout_products_item_qty">(1x)</span>
												<span class="shop-checkout_products_item_attributes">Weight: 1kg, Dimensions: 10 × 10 × 30 cm</span>
											</td>
											<td class="text-right">$8.10</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td>Subtotal</td>
											<td class="text-right">$21.70</td>
										</tr>
										<tr>
											<td>Shipping (Flat rate)</td>
											<td class="text-right">$20.00</td>
										</tr>
										<tr>
											<td>Tax</td>
											<td class="text-right">$0.00</td>
										</tr>
										<tr>
											<td>Total</td>
											<td class="text-right text-secondary">$41.70</td>
										</tr>
									</tfoot>
								</table>
								<div class="shop-checkout_payments">
									<label class="shop-checkout_payments_item">
										<input class="form_control_radio" type="radio" name="payment_method" value="bacs" checked>
										<span class="shop-checkout_payments_item_info">
											<span class="shop-checkout_payments_item_title">
												<span>Direct bank transfer</span>
											</span>
											<span class="shop-checkout_payments_item_description">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</span>
										</span>
									</label>
									<label class="shop-checkout_payments_item">
										<input class="form_control_radio" type="radio" name="payment_method" value="cod">
										<span class="shop-checkout_payments_item_info">
											<span class="shop-checkout_payments_item_title">
												<span>Cash on delivery</span>
											</span>
											<span class="shop-checkout_payments_item_description">Pay with cash upon delivery.</span>
										</span>
									</label>
									<label class="shop-checkout_payments_item">
										<input class="form_control_radio" type="radio" name="payment_method" value="paypal">
										<span class="shop-checkout_payments_item_info">
											<span class="shop-checkout_payments_item_title">
												<span>PayPal</span>
												<span><img src="assets/img/checkout-paypal.jpg" alt="Paypal"></span>
												<span class="text-size-14"><a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" target="_blank">What is PayPal?</a></span>
											</span>
											<span class="shop-checkout_payments_item_description">Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</span>
										</span>
									</label>
									<label class="shop-checkout_payments_item">
										<input class="form_control_radio" type="radio" name="payment_method" value="cheque">
										<span class="shop-checkout_payments_item_info">
											<span class="shop-checkout_payments_item_title">
												<span>Check payments</span>
											</span>
											<span class="shop-checkout_payments_item_description">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span>
										</span>
									</label>
								</div>
								<div class="shop-checkout_order">
									<div class="shop-checkout_order_note">
										<p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy.</a></p>
									</div>
									<div class="shop-checkout_order_button">
										<button class="button is-grey" type="submit" name="order">
											<span class="button_text">Place order</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Section Checkout End -->
</body>
</html>
@endsection