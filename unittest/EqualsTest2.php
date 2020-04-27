<?php

use PHPUnit\Framework\TestCase;

class EqualsTest2 extends TestCase

{

    function login(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email|max:255',
            'password' => 'required',
        ]);
    
        try {
            $credentials = $request->only('email', 'password');
    
            if (! $token = $this->jwt->attempt($credentials)) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json(['token_expired'], 500);
        } catch (TokenInvalidException $e) {
            return response()->json(['token_invalid'], 500);
        } catch (JWTException $e) {
            return response()->json(['token_absent' => $e->getMessage()], 500);
        }
    
        return response()->json(compact('token'));
    }

}

?>