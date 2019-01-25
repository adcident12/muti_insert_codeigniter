<?php
// function log_Profiling(){
// global $CI ,$application_folder;
//     $output = '<html><body>';
//     $output .= '<fieldset id="ci_profiler_benchmarks" style="border:1px solid #c00000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">
// <legend style="color:#c00000;">OUTPUT</legend>'.$CI->output->get_output().'</fieldset>';
//     if( ! isset($_POST['profiler'])){
//         $CI->load->library('profiler');
//         if ( ! empty($CI->_profiler_sections)){
//             $CI->profiler->set_sections($this->_profiler_sections);
//         }
//         $output .= $CI->profiler->run();
//     }
//     $output .= '</body></html>';
//     $fp = fopen($application_folder.'/logs/Profiling/'.date('Y-m-d-H-i-s-U').'_'.$CI->router->class.'_'.$CI->router->method.'.html' ,'w');
//     flock($fp ,LOCK_EX);
//     fwrite($fp ,$output);
//     flock($fp ,LOCK_UN);
//     fclose($fp);
// }
