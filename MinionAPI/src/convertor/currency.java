package convertor;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.QueryParam;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.ApplicationPath;
import javax.ws.rs.core.Application;

@Path("/convert")
public class currency {
	
	@GET
	@Produces(MediaType.TEXT_HTML)
	public String printInfo(@QueryParam("banana") int banana) {
		
		System.out.println(banana);
		double response;
		response = banana * 1.25;
		
		return "<h1>" +  banana + " banana bucks is worth " + response+" euro </h1>" ;
	}
	
}