<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class OutfitPairing
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(OutfitPairing))
        Me.pnlMood = New System.Windows.Forms.Panel()
        Me.btnGenerateOutfit = New System.Windows.Forms.Button()
        Me.btnFormal = New System.Windows.Forms.Button()
        Me.btnRelaxed = New System.Windows.Forms.Button()
        Me.btnSporty = New System.Windows.Forms.Button()
        Me.btnConfident = New System.Windows.Forms.Button()
        Me.btnSad = New System.Windows.Forms.Button()
        Me.btnNeutral = New System.Windows.Forms.Button()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.btnHappy = New System.Windows.Forms.Button()
        Me.Panel2 = New System.Windows.Forms.Panel()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.btnBookmark = New System.Windows.Forms.Button()
        Me.flpPairedOutfit = New System.Windows.Forms.FlowLayoutPanel()
        Me.btnClear = New System.Windows.Forms.Button()
        Me.pnlMood.SuspendLayout()
        Me.Panel2.SuspendLayout()
        Me.SuspendLayout()
        '
        'pnlMood
        '
        Me.pnlMood.AutoScroll = True
        Me.pnlMood.Controls.Add(Me.btnGenerateOutfit)
        Me.pnlMood.Controls.Add(Me.btnFormal)
        Me.pnlMood.Controls.Add(Me.btnRelaxed)
        Me.pnlMood.Controls.Add(Me.btnSporty)
        Me.pnlMood.Controls.Add(Me.btnConfident)
        Me.pnlMood.Controls.Add(Me.btnSad)
        Me.pnlMood.Controls.Add(Me.btnNeutral)
        Me.pnlMood.Controls.Add(Me.Label2)
        Me.pnlMood.Controls.Add(Me.btnHappy)
        Me.pnlMood.Location = New System.Drawing.Point(239, 64)
        Me.pnlMood.Name = "pnlMood"
        Me.pnlMood.Size = New System.Drawing.Size(651, 461)
        Me.pnlMood.TabIndex = 3
        '
        'btnGenerateOutfit
        '
        Me.btnGenerateOutfit.BackColor = System.Drawing.SystemColors.GradientActiveCaption
        Me.btnGenerateOutfit.FlatStyle = System.Windows.Forms.FlatStyle.Popup
        Me.btnGenerateOutfit.Font = New System.Drawing.Font("Segoe UI", 10.2!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnGenerateOutfit.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnGenerateOutfit.Location = New System.Drawing.Point(241, 401)
        Me.btnGenerateOutfit.Name = "btnGenerateOutfit"
        Me.btnGenerateOutfit.Size = New System.Drawing.Size(150, 38)
        Me.btnGenerateOutfit.TabIndex = 14
        Me.btnGenerateOutfit.Text = "Generate Outfit"
        Me.btnGenerateOutfit.UseVisualStyleBackColor = False
        '
        'btnFormal
        '
        Me.btnFormal.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnFormal.Image = CType(resources.GetObject("btnFormal.Image"), System.Drawing.Image)
        Me.btnFormal.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnFormal.Location = New System.Drawing.Point(171, 300)
        Me.btnFormal.Name = "btnFormal"
        Me.btnFormal.Size = New System.Drawing.Size(298, 83)
        Me.btnFormal.TabIndex = 13
        Me.btnFormal.Text = "Formal"
        Me.btnFormal.UseVisualStyleBackColor = True
        '
        'btnRelaxed
        '
        Me.btnRelaxed.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnRelaxed.Image = CType(resources.GetObject("btnRelaxed.Image"), System.Drawing.Image)
        Me.btnRelaxed.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnRelaxed.Location = New System.Drawing.Point(330, 211)
        Me.btnRelaxed.Name = "btnRelaxed"
        Me.btnRelaxed.Size = New System.Drawing.Size(298, 83)
        Me.btnRelaxed.TabIndex = 12
        Me.btnRelaxed.Text = "Relaxed"
        Me.btnRelaxed.UseVisualStyleBackColor = True
        '
        'btnSporty
        '
        Me.btnSporty.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnSporty.Image = CType(resources.GetObject("btnSporty.Image"), System.Drawing.Image)
        Me.btnSporty.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnSporty.Location = New System.Drawing.Point(330, 131)
        Me.btnSporty.Name = "btnSporty"
        Me.btnSporty.Size = New System.Drawing.Size(298, 83)
        Me.btnSporty.TabIndex = 11
        Me.btnSporty.Text = "Sporty"
        Me.btnSporty.UseVisualStyleBackColor = True
        '
        'btnConfident
        '
        Me.btnConfident.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnConfident.Image = CType(resources.GetObject("btnConfident.Image"), System.Drawing.Image)
        Me.btnConfident.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnConfident.Location = New System.Drawing.Point(330, 52)
        Me.btnConfident.Name = "btnConfident"
        Me.btnConfident.Size = New System.Drawing.Size(298, 83)
        Me.btnConfident.TabIndex = 10
        Me.btnConfident.Text = "Confident"
        Me.btnConfident.UseVisualStyleBackColor = True
        '
        'btnSad
        '
        Me.btnSad.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnSad.Image = CType(resources.GetObject("btnSad.Image"), System.Drawing.Image)
        Me.btnSad.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnSad.Location = New System.Drawing.Point(26, 211)
        Me.btnSad.Name = "btnSad"
        Me.btnSad.Size = New System.Drawing.Size(298, 83)
        Me.btnSad.TabIndex = 9
        Me.btnSad.Text = "Sad"
        Me.btnSad.UseVisualStyleBackColor = True
        '
        'btnNeutral
        '
        Me.btnNeutral.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnNeutral.Image = CType(resources.GetObject("btnNeutral.Image"), System.Drawing.Image)
        Me.btnNeutral.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnNeutral.Location = New System.Drawing.Point(26, 132)
        Me.btnNeutral.Name = "btnNeutral"
        Me.btnNeutral.Size = New System.Drawing.Size(298, 83)
        Me.btnNeutral.TabIndex = 8
        Me.btnNeutral.Text = "Neutral"
        Me.btnNeutral.UseVisualStyleBackColor = True
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.BackColor = System.Drawing.Color.FromArgb(CType(CType(255, Byte), Integer), CType(CType(192, Byte), Integer), CType(CType(192, Byte), Integer))
        Me.Label2.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label2.Location = New System.Drawing.Point(217, 11)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(222, 31)
        Me.Label2.TabIndex = 2
        Me.Label2.Text = "Choose your mood:"
        '
        'btnHappy
        '
        Me.btnHappy.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnHappy.Image = CType(resources.GetObject("btnHappy.Image"), System.Drawing.Image)
        Me.btnHappy.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnHappy.Location = New System.Drawing.Point(26, 52)
        Me.btnHappy.Name = "btnHappy"
        Me.btnHappy.Size = New System.Drawing.Size(298, 83)
        Me.btnHappy.TabIndex = 2
        Me.btnHappy.Text = "Happy"
        Me.btnHappy.UseVisualStyleBackColor = True
        '
        'Panel2
        '
        Me.Panel2.BackColor = System.Drawing.Color.FromArgb(CType(CType(162, Byte), Integer), CType(CType(137, Byte), Integer), CType(CType(115, Byte), Integer))
        Me.Panel2.Controls.Add(Me.Label3)
        Me.Panel2.Dock = System.Windows.Forms.DockStyle.Top
        Me.Panel2.Location = New System.Drawing.Point(0, 0)
        Me.Panel2.Name = "Panel2"
        Me.Panel2.Size = New System.Drawing.Size(1100, 45)
        Me.Panel2.TabIndex = 13
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Font = New System.Drawing.Font("Segoe UI", 19.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label3.ForeColor = System.Drawing.Color.White
        Me.Label3.Location = New System.Drawing.Point(431, 2)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(230, 45)
        Me.Label3.TabIndex = 1
        Me.Label3.Text = "Outfit Pairing"
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Font = New System.Drawing.Font("Times New Roman", 19.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label1.ForeColor = System.Drawing.Color.Black
        Me.Label1.Location = New System.Drawing.Point(443, 66)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(203, 37)
        Me.Label1.TabIndex = 2
        Me.Label1.Text = "Paired Outfit"
        '
        'btnBookmark
        '
        Me.btnBookmark.FlatStyle = System.Windows.Forms.FlatStyle.Popup
        Me.btnBookmark.Image = CType(resources.GetObject("btnBookmark.Image"), System.Drawing.Image)
        Me.btnBookmark.Location = New System.Drawing.Point(856, 57)
        Me.btnBookmark.Name = "btnBookmark"
        Me.btnBookmark.Size = New System.Drawing.Size(47, 51)
        Me.btnBookmark.TabIndex = 4
        Me.btnBookmark.UseVisualStyleBackColor = True
        Me.btnBookmark.Visible = False
        '
        'flpPairedOutfit
        '
        Me.flpPairedOutfit.AutoScroll = True
        Me.flpPairedOutfit.Location = New System.Drawing.Point(214, 128)
        Me.flpPairedOutfit.Name = "flpPairedOutfit"
        Me.flpPairedOutfit.Size = New System.Drawing.Size(698, 397)
        Me.flpPairedOutfit.TabIndex = 15
        Me.flpPairedOutfit.WrapContents = False
        '
        'btnClear
        '
        Me.btnClear.FlatStyle = System.Windows.Forms.FlatStyle.System
        Me.btnClear.Font = New System.Drawing.Font("Segoe UI", 10.2!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnClear.Location = New System.Drawing.Point(39, 191)
        Me.btnClear.Name = "btnClear"
        Me.btnClear.Size = New System.Drawing.Size(138, 35)
        Me.btnClear.TabIndex = 17
        Me.btnClear.Text = "Clear"
        Me.btnClear.UseVisualStyleBackColor = True
        '
        'OutfitPairing
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 16.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.AutoScroll = True
        Me.BackColor = System.Drawing.Color.FromArgb(CType(CType(250, Byte), Integer), CType(CType(245, Byte), Integer), CType(CType(239, Byte), Integer))
        Me.ClientSize = New System.Drawing.Size(1100, 600)
        Me.Controls.Add(Me.btnClear)
        Me.Controls.Add(Me.pnlMood)
        Me.Controls.Add(Me.flpPairedOutfit)
        Me.Controls.Add(Me.btnBookmark)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.Panel2)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Name = "OutfitPairing"
        Me.Text = "Pairing"
        Me.pnlMood.ResumeLayout(False)
        Me.pnlMood.PerformLayout()
        Me.Panel2.ResumeLayout(False)
        Me.Panel2.PerformLayout()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents btnHappy As Button
    Friend WithEvents pnlMood As Panel
    Friend WithEvents btnNeutral As Button
    Friend WithEvents Label2 As Label
    Friend WithEvents btnSporty As Button
    Friend WithEvents btnConfident As Button
    Friend WithEvents btnSad As Button
    Friend WithEvents btnFormal As Button
    Friend WithEvents btnRelaxed As Button
    Friend WithEvents btnGenerateOutfit As Button
    Friend WithEvents Panel2 As Panel
    Friend WithEvents Label3 As Label
    Friend WithEvents Label1 As Label
    Friend WithEvents btnBookmark As Button
    Friend WithEvents flpPairedOutfit As FlowLayoutPanel
    Friend WithEvents btnClear As Button
End Class
