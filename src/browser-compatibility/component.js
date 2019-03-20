const { Component } = React;

export default class Prompt extends Component {
	static propTypes = {}

	componentDidMount() {
		if ( window.confirm( 'You need to upgrade your browser.' ) ) {
			window.location.href = 'https://www.amazon.com/Netscape-Navigator-Personal-Ver-Windows/dp/B0028M1T9E/';
		}
	}

	render() {
		return (
			<img src="https://uc47d3537856c015f89e52ffe5cf.previews.dropboxusercontent.com/p/thumb/AAU41k3lWq6k8bfuTx8ro_xbcAhhjO_2GaNZINHEGsHTFFDQgetHQnIk6lJB1qr3xxjFenll73RuE2zgxTPpsodegGLeizHNejx8p0VuVPBdZG6cTDQCBm9ckyWEgOJfk3C5THi3IKobgBSTjrInt-PpyhNQ-2uczYBskc_tOxycXThUvSWJQKUMy2YEq0iuu1dmcC_kGg4tZMCxOPX4b7jWgCuOkZxykruWSo_ElLqD39EKveF9rq2lv6ixxYgdBNl78CpnLABFghC_cEYTmnJcuYBSRo5j93fDYByweCgx9A0mPTd0wco4Vv2PRffqXc7xve1F0JUcmoaWdVHwabR4/p.png?size_mode=5" alt="" />
		);
	}
}
