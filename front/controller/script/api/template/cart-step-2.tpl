<select name="inputAmp" id="inputAmp"
    onchange="loadBoxSelectBoxArea('myFormOrderMin','loadSelectBoxAreaS','boxLoadComplete')">
    <option value="0">{$lang['order']['ampSel']}</option>
    {foreach $callAmp as $keycallAmp => $valuecallAmp}
        <option value="{$valuecallAmp.id}">{$valuecallAmp.subject}</option>
    {/foreach}
</select>