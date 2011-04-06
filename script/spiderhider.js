function hideEmail (domain, front, end) {
	return addMailto( front+"@"+domain+"."+end);
}
function addMailto(address) {
	return "<a href='mailto:"+address+"'>"+address+"</a>";
}
function hidePhone(mid, last, area) {
	return "("+area+") "+mid+"-"+last;
}
