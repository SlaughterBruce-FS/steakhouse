<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DeployController extends Controller
{
    public function deploy(Request $request)
    {
        $githubPayload = $request->getContent();
        $githubHash = $request->header('X-Hub-Signature');
        $localToken = env('APP_DEPLOY_SECRET');
        $localHash = 'sha1=' . hash_hmac('sha1', $githubPayload, $localToken, false);
        if (hash_equals($githubHash, $localHash)) {
            $root_path = base_path();
            $process = new Process(["sh", $root_path . '/deploy.sh']);
            try {
                $process->mustRun();

                echo $process->getOutput();
            } catch (ProcessFailedException $exception) {
                echo $exception->getMessage();
            }
        } else {
            echo "hash doesn't match";
        }
    }
}
