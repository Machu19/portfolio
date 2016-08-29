<?php 

namespace App\Http\Controllers;
	use App\Post;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use Mail;
	use Session;
	
class PagesController extends Controller {
		
		public function getIndex(){
			return view('pages.welcome');
		}

		public function postIndex(Request $request){
			$this -> validate($request, [
			'email' => 'required|email',
			'name' => 'min:1',
			'subject' => 'min:1',
			'message' => 'min:1']);
			
			$data = array (
				'email' => $request->email,
				'name' => $request->name,
				'subject' => $request->subject,
				'bodyMessage' => $request->message
			);
			Mail::send('email.contact', $data, function($message) use ($data){
				$message->from($data['email']);
				$message->to('kamil.mach95@gmail.com');
				$message->subject($data['subject']);
				
			});
			Session::flash('message', "Your message has been sent");
		   	 return redirect('/');
		}
		
	
}
